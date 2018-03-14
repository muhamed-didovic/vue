<template>
    <div class="VueForm" >
        <form action="" @submit.prevent="onSchemaFormSubmit">
            <template v-for="field in schema.fields">
                <component :is="field.type" :field="field" :data.sync="data[field.name]"></component>
            </template>
            <div class="control">
                <button class="button is-primary">Create</button>
            </div>
        </form>
    </div>
</template>

<script>
    import _ from 'lodash';
    // Text input field component
    const textInput = {
        props: {
            field: {required: true},
            data: {required: true}
        },

        template: `
            <div class="form-control">
                <label>{{ field.label }}</label>
                <input class="input" type="text" :placeholder="field.placeholder" v-model="data.value">
            </div>
        `
    };

    // Checkbox input field component
    const checkboxInput = {
        props: {
            field: {required: true},
            data: {required: true}
        },

        template: `
            <div class="form-control">
                <label>{{ field.label }}</label>
                <label class="input">
                    <input type="checkbox" v-model="data.value">
                    {{ field.placeholder }}
                </label>
            </div>
        `
    };

    // Dynamic form component
    export default {
        name: "SchemaForms",
        components: {
            textInput: textInput,
            checkboxInput: checkboxInput
        },

        props: {
            schema: {required: true},
            data: {required: true}
        },
        methods: {
            onSchemaFormSubmit() {
                const r =  _.reduce(this.data, (result, item , key) => {
                    console.log('res', result, 'key', key, 'item', item);
                    result[key] = item.value;
                    return result;
                }, {});
                console.log('2222', r);
                axios.post('/projects', r)
                    .then(response => {
                        console.log('rrrrr', response);
                        console.log('before', response.data.projects);
                        console.log('after', response.data.projects);
                        EventBus.$emit('projects', response.data.projects)

                    })
                    .catch(err => console.log('Error from methods:', err));
            },
        }
    }
</script>

<style scoped>

</style>
