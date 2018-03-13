import _ from 'lodash';

export class Errors {
    /**
     * Create a new Errors instance.
     */
    constructor() {
        this.errors = {};
    }


    /**
     * Determine if an errors exists for the given field.
     *
     * @param {string} field
     */
    has(field) {
        // console.log('fired has()');
        // console.log(field);
        // return this.errors.errors.hasOwnProperty(field); <-- this also will work
        return _.has(this.errors.errors, field);
    }


    /**
     * Determine if we have any errors.
     */
    any() {
        // console.log(Object.keys(this.errors).length > 0);
        return Object.keys(this.errors).length > 0;
    }


    /**
     * Retrieve the error message for a field.
     *
     * @param {string} field
     */
    get(field) {
        // console.log(_.has(this.errors.errors, field));
        if (_.has(this.errors.errors, field)) {
            // console.log(this.errors['errors'][field][0]);
            return this.errors.errors[field][0];
        }
    }


    /**
     * Record the new errors.
     *
     * @param {object} errors
     */
    record(errors) {
        this.errors = errors;
        // console.log('errors logged.');
    }


    /**
     * Clear one or all error fields.
     *
     * @param {string|null} field
     */
    clear(field) {
        if (field && _.has(this.errors.errors, field)) {
            delete this.errors.errors[field];

            return;
        }

        this.errors = {};
    }
}

// export { Error as default}

