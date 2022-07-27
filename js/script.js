var app = new Vue({
  el: '#root',
  data: {
    discsArray: [],
    userGenre: 'all',
  },
  methods: {
    getDiscsFromApi() {
      axios
        .get('http://localhost:8888/php-ajax-dischi/api.php', {
          params: {
            genre: this.userGenre,
          },
        })
        .then((response) => {
          this.discsArray = response.data;
        });
    },
  },
  mounted() {
    this.getDiscsFromApi();
  },
});
