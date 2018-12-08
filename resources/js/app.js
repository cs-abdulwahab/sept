/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');


window.Vue = require('vue');


require('./sample');

test();

function pun() {

    console.log('this is the pun function from app.js')
}


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

/*import 'v-slim-dialog/dist/v-slim-dialog.css'*/

/*import SlimDialog from 'v-slim-dialog'*/


function average(a, b) {

    return (a + b) / 2;

}


function sampletest() {


}


console.log("Average ====== = " + average(100, 2));

var vm1 = new Vue({

    el: "#myapp",
    data: {
        message: 'Hello Vue from Sample File  !!!!!!!!!!'
    },

});


/*

Vue.use(SlimDialog);


import VeeValidate from 'vee-validate';

Vue.use(VeeValidate);
*/
/*

Vue.component('example-component', require('./components/ExampleComponent.vue'));


Vue.component('base-input', {
    inheritAttrs: false,
    props: ['label', 'value',],

    template: `

    <label>
      {{ label }}
      <input
        v-bind="$attrs"
        v-bind:value="value"
        v-on:input="$emit('input', $event.target.value)"
      />
    
    </label>
  `
});
*/

Vue.component('sample-component', require('./components/SampleComponent.vue'));


/*

Vue.component('alert', {
    props: ["message", "show"],
    template: '#alert',
});
*/


/*

var vm = new Vue({
    el: '#databinding',
    data: {
        items: [],
        styleobj: {
            width: "30%",
            padding: "12px 20px",
            margin: "8px 0",
            boxSizing: "border-box"
        }
    },
    methods: {
        showinputvalue: function (event) {
            this.items.push(event.target.value);
        }
    },
});
*/


/*
var vm4 = new Vue(
    {
        el: '#vm4',
        data: {
            err: [],
            msg: 'sample message',
            users: [],
            email: 'cs.abdulwahab@gmail.com',
            fname: 'IQRA',
            submitForm: false,
        },

        methods: {




            validateBeforeSubmit(e) {

                console.log('in the validator Before Submit');

                this.$validator.validateAll();
                if (!this.errors.any()) {
                    //      this.submitForm()
                    this.submitForm = true;
                    console.log('There are not Errors in this form');
                    this.users.push({fname: 'fname', phone: 'phone'});

                    this.showAlert();
                }
                else {
                    console.log('There are few errors in this form');

                }
            },


            showAlert() {
                const options = {title: 'Info', size: 'sm'}
                this.$dialogs.alert('Your message', options)
                    .then(res => {
                        console.log(res) // {ok: true|false|undefined}
                    });

                var vm = this
                axios.get('https://yesno.wtf/api')
                    .then(function (response) {
                        vm.answer = _.capitalize(response.data.answer)
                    })
                    .catch(function (error) {
                        vm.answer = 'Error! Could not reach the API. ' + error
                    })


            },
        }

    }
);
*/


/*
var e1 = new Vue({
    el: '#example-1',
    data: {
        counter: 0,
        styleobj: {
            color: '#FDA',
            backgroundColor: '#FAA',
        },
        show: true,
    },

    methods: {
        send: function () {

            this.show = !this.show;

        },
    },
});
*/

/*
Vue.component('example-component', require('./components/ExampleComponent.vue'));

Vue.component('alert', {
    props: ["message", "show"],
    template: '#alert',
});

*/


/*

var myapp = new Vue({
    el: '#app',
    data: {
        title: 'title hai',
        er: false,
        errorMessage: null,
        num1: 100,
        num2: 200,
        total: '',
    },
    methods: {
        trigger: function (event) {
            //this.errors = true;
            this.errorMessage = "Whoops!";

            alert(this.title);

            console.log('function called ');
        },

    }
});
*/
