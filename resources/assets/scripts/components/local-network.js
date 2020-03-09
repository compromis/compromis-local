export default {
  el: '#locals',
  data: {
    territorials: [],
    territorialText: '',
    locals: [],
    filterValue: '',
    filteredResults: [],
  },
  mounted () {
    this.fetchLocals();
  },
  watch: {
    filterValue: function (newVal) {
      if (newVal === '') {
        this.filteredResults = this.territorials;
      } else {
        this.filter();
      }
    },
    territorialText: function (newVal) {
      if (newVal === '') {
        this.filteredResults = this.territorials;
      }
    },
  },
  methods: {
    fetchLocals () {
      fetch('https://compromis.net/common/json_municipis.php?with_territorials=true')
        .then(response => { return response.json() })
        .then(data => {
          this.locals = data.locals;
          this.territorials = data.territorials;
          this.filteredResults = data.territorials;
        });
    },
    filter () {
      this.filteredResults = this.locals.filter(local => local.name.toLowerCase().startsWith(this.filterValue.toLowerCase()));
    },
    setTerritory (website) {
      this.territorialText = website.name;
      this.filteredResults = this.locals.filter(local => local.territori_id == website.id);
    },
  },
}
