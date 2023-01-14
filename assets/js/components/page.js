export default {
    template : `
    <select @change="loadStates($event)"  id="countries">
        <option value="">Select country</option>
        <option v-for="country in countries" :value="country.id" :data-key="country.id">{{country.country_name}}</option>
    </select>

    <select id="states" @change="loadDistric($event)" v-show="stateVisibility">
        <option value="">Select states</option>
        <option v-for="state in states" :value="state.state_id" :data-key="state.state_id">{{state.state_name}}</option>
    </select>
    <select id="distric" v-show="districVisibility">
        <option value="">Select distric</option>
        <option v-for="distric in district" :value="distric.district_id" :data-key="distric.district_id">{{distric.district_name}}</option>
    </select>`,
    data(){
        return{
            countries : [],
            states : [],
            district : [],
            stateVisibility: false,
            districVisibility:false
        }
    },
    mounted : function(){
        axios
            .get('http://dev7.pro/gitSelect/api/countries.php')
            .then(response => (this.countries = response.data))
    },
    methods : {
        loadStates: function($event) {
            axios
                .get('http://dev7.pro/gitSelect/api/states.php?country_id='+$event.target.value)
                .then(response => (this.states = response.data)),
            this.stateVisibility = true
        },
        loadDistric: function($event) {
            axios
                .get('http://dev7.pro/gitSelect/api/district.php?steate_id='+$event.target.value)
                .then(response => (this.district = response.data)),
            this.districVisibility = true
        }
    }
}