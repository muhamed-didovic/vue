<template>
    <div>
        <!--OLD WAY-->
        <custom-old-way-input v-model="coupon" :code="coupon"></custom-old-way-input>

        <!--NEW WAy-->
        <custom-input v-model="coupon" :code="coupon"></custom-input>
        <hr>
        OTHER VARIATIONS: <br>
        <coupon v-model="coupon"></coupon>
        <coupon v-bind:code="coupon" v-on:input="coupon = arguments[0]"></coupon>
        <coupon2 v-model="coupon2"></coupon2>
        <coupon2 v-bind:value="coupon2" v-on:input="coupon2 = arguments[0]"></coupon2>
        <hr>
        TEMPVAR = @{{tempvar}}
        <br>
        With input & without props:
        <child :value="tempvar"></child>
        <br><br>
        Without input & without props:
        <child2 :value="tempvar"></child2>
        <br><br>
        Without input & with props:
        <child3 :value="tempvar"></child3>
    </div>
</template>

<script>

    export default {
        name: "CustomInputView",
        data() {
          return {
              //custom input
              coupon: 'FREEBIE', // Maybe from DB or querystring.
              coupon2: 'FREEBIE2',
              tempvar: 'TEST',
          }
        },
        components: {
            //Custom new way input
            'custom-input': require('../components/shared/CustomInput'),
            //Custom old way input
            'custom-old-way-input': require('../components/shared/CustomOldWayInput'),
            //Some variations for custom input
            'coupon': require('../components/shared/Coupon'),
            'coupon2': require('../components/shared/Coupon2'),
            'child': {
                template: '<input type="text">'
            },
            'child2': {
                template: '<span>{{value}}</span>'
            },

            'child3': {
                props: ['value'],
                template: '<span>{{value}}</span>'
            }
        }
    }
</script>

<style scoped>

</style>