/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
//     {
//         template: require('./components/ExampleComponent.vue'),
//         // declare the props
//         //props: ['message'],
//         // data: function () {
//         //     return {
//         //         message: 'hello'
//         //     }
//         // }
//         // data() {
//         //     return {
//         //         message: 'hello'
//         //     }
//         // }
//     }
// );

Vue.component('task-list', {
    template: `
        <ul>
            <task v-for="(task, index) in tasks" :key = "task.index">{{task.desc}}</task>
        </ul>     
    `,
    data() {
        return {
            tasks: [
                {'desc': '1111', completed: true},
                {'desc': '222', completed: false},
                {'desc': '333', completed: true},
                {'desc': '444', completed: false},
                {'desc': '55555', completed: true},
            ]
        }
    }
});
Vue.component('task', {
    template: `<li><slot></slot></li>`

});

Vue.component('Modal', require('./components/Modal.vue'));
// The Vue NewPostModal component
Vue.component('NewPostModal', require('./components/NewPostModalTemplate'));

Vue.component('NewCommentModal', require('./components/NewCommentModalTemplate'));

Vue.component('alert', require('./components/Alert'));
Vue.component('todo', require('./components/Todo'));

Vue.component('Tabs', require('./components/Tabs'));
Vue.component('Tab', require('./components/Tab'));

const app = new Vue({
    el: '#app',
    data: {
        //message: '--this is a message--',
        newName: '',
        names: ['1', 'test2', 'test3'],
        title: 'this is a title!',
        color: 'btn btn-primary',
        apply: false,
        tasks: [
            {'desc': '1111', completed: true},
            {'desc': '222', completed: false},
            {'desc': '333', completed: true},
            {'desc': '444', completed: false},
            {'desc': '55555', completed: true},
        ],

        //modal related code
        showNewPostModal: false,
        showNewCommentModal: false,
        showModal: false
    },
    methods: {
        addName() {
            console.log('button', button);
            //this.disabledState = ! this.disabledState;

            //prevent adding of new name if empty
            if (!this.newName) {
                return;
            }
            this.apply = true;
            //everything will be proxied to 'this' from 'data' object
            this.names.push(this.newName);

            //remove text from input
            this.newName = '';
            //this.apply = false;
        },
        toggleTask(task) {
            console.log('test', task);
            task.completed = !task.completed
        },
        dt(index) {
            this.tasks.splice(index, 1);
            alert('Task deleted');
        },

    },
    // Computed properties are properties that need to be processed or computed for some reason
    computed: {
        // reversedMessage() {
        //     return this.message.split('').reverse().join('');
        // },
        completeTasks() {
            return this.tasks.filter(task => task.completed)
        },
        incompleteTasks() {
            return this.tasks.filter(task => !task.completed)
        },

    },
    mounted() {
        console.log('mauuu');
    }
});

//add new name
app.names.push('new test');

// Vue.component('modal', {
//     template: `
//         <!--<script type="x/template" id="modal-template">-->
//         <transition name="modal">
//             <div class="modal-mask" @click="close" v-show="show">
//                 <div class="modal-container" @click.stop>
//                     <div class="modal-header">
//                         <h3>New Post <slot></slot></h3>
//                     </div>
//                     <div class="modal-body">
//
//                         <label class="form-label">
//                             Title
//                             <input class="form-control" v-model="title">
//                         </label>
//                         <label class="form-label">
//                             Body
//                             <textarea v-model="body" rows="5" class="form-control"></textarea>
//                         </label>
//                     </div>
//                     <div class="modal-footer text-right">
//                         <button class="modal-default-button" @click="savePost()">
//                             Save
//                         </button>
//                     </div>
//                 </div>
//             </div>
//         </transition>
//     <!--</script>-->
//    `,
//     props: ['show'],
//     data: function () {
//         return {
//             title: '',
//             body: ''
//         };
//     },
//     methods: {
//         savePost: function () {
//             // Some save logic goes here...
//
//             this.$emit('close');
//         },
//         close: function () {
//             this.$emit('close');
//             this.title = '';
//             this.body = '';
//         }
//     },
//     mounted: function () {
//         document.addEventListener("keydown", (e) => {
//             if (this.show && e.keyCode === 27) {
//                 this.close();
//             }
//         });
//     }
// });
