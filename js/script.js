const App = new Vue(
    {
      el: '#app',
      data: {
        albums: []
      },
      created() {
        axios.get('http://localhost/php-ajax-dischi/server/controller-api.php').then((result) => {
          this.albums = result.data.results;
        }).catch((error) => { console.log(error); });
      }
    }
  );