<template>
    <div>
        <div v-if="projects">
            <h1 class="title is-3">My Projects</h1>

            <ul>
                <li v-for="project in projects">
                    <h3 @click="deleteProject(project)">{{ project.name }}</h3>
                </li>
            </ul>
            <hr>
        </div>
        <schema-forms :schema="formSchema" :data="formData"></schema-forms>

        <hr>
        Form data:
        <pre>{{ formData}}</pre>
    </div>
</template>

<script>
    //import Form class for easier maintenance of form and its elements
    import {Form} from "../classes/Form";
    export default {
        name: "FormsView",
        components: {
            //Schema forms
            'schema-forms': require('../components/SchemaForms')
        },
        data() {
            return {
                //custom form
                form: new Form({
                    name: '',
                    description: ''
                }),
                projects: [],

                //Schema forms
                formSchema: {
                    fields: [
                        {
                            type: 'text-input',
                            name: 'name',
                            label: 'Name',
                            placeholder: 'Enter project name'
                        },
                        {
                            type: 'text-input',
                            name: 'description',
                            label: 'Descriptione',
                            placeholder: 'Enter project description'
                        },
                        {
                            type: 'checkbox-input',
                            name: 'is_admin',
                            label: 'Administrator',
                            placeholder: 'Sure, why not'
                        }
                    ]
                },
                formData: {
                    name: {
                        value: 'John'
                    },
                    description: {
                        value: 'Doe'
                    },
                    is_admin: {
                        value: true
                    }
                },
            }
        },
        created() {

            EventBus.$on('projects', (projects) => {
                alert('Event bus projects');
                this.projects = projects;
            });

            axios.get('/projects')
                .then(response => {
                    console.log('on load:', response.data);
                    this.projects = response.data.projects;
                })
                .catch(err => console.log(err));
        },
        methods:{
            onSubmit() {
                this.form.post('/projects')
                    .then(response => {
                        console.log('rrrrr', response);
                        console.log('before', this.projects);
                        this.projects = response.projects;
                        console.log('after', this.projects);
                    })
                    .catch(err => console.log('Error from methods:', err));
            },
            deleteProject(project){
                this.form.delete('/projects/' + project.id)
                    .then(response => {
                        console.log('DELETE RESPONSE:', response);
                        console.log('before', this.projects);
                        this.projects = response.projects;
                        console.log('after', this.projects);
                    })
                    .catch(err => console.log('Error from methods:', err));
            },
        }
    }
</script>

<style scoped>

</style>