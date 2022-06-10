const app = new Vue (
    {
        el: '#root',
        data: {
            albums: [],
        },
        created() {
            axios
              .get("http://http://localhost/php-ajax-dischi/server.php")
              .then((resp) => {
                this.albums = resp.data;
                console.log(albums)
              });
          },
    });
    