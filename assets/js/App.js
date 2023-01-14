export default{

    data() {
        return {
            countries : [],
            states : [],
            distriks : [],
            stateVisibility: false,
            distrikVisibility: false
        }
    },
    template:`
        <select @change="loadStates($event)"  id="countries">
            <option value="">Select country</option>
            <option v-for="country in countries" :value="country.country_id" :data-key="country.country_id">{{country.country_name}}</option>
        </select>

        <select @change="loaddistriks($event)" id="states" v-show="stateVisibility">
            <option value="">Select states</option>
            <option v-for="state in states" :value="state.state_id" :data-key="state.state_id">{{state.state_name}}</option>
        </select>

        <select id="distriks" v-show="distrikVisibility">
            <option value="">Select distric</option>
            <option v-for="distrik in distriks" :value="distrik.distrik_id" :data-key="distrik.distrik_id">{{distrik.distik_name}}</option>
        </select>
    `,

   
    mounted : function(){
        axios
            .get('http://dev4.pro/jsselect/countries.php')
            .then(response => (this.countries = response.data))
    },
    methods : {
        loadStates: function($event) {
            axios
                .get('http://dev4.pro/jsselect/states.php?country_id='+$event.target.value)
                    
                .then(response => (this.states = response.data)),
            this.stateVisibility = true
        },
        loaddistriks: function($event) {
            axios
                .get('http://dev4.pro/jsselect/distriks.php?state_id='+$event.target.value)
                .then(response => (this.distriks = response.data)),
            this.distrikVisibility = true
        }
    }, 
    
}