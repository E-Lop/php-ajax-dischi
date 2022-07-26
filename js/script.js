var app = new Vue({
  el: '#root',
  data: {
    discsArray: [],
  },
  methods: {
    getDiscsFromApi() {
      axios
        .get('http://localhost:8888/php-ajax-dischi/api.php')
        .then((response) => {
          this.discsArray = response.data;
        });
    },
  },
  mounted() {
    this.getDiscsFromApi();
  },
});
