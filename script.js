// Collego Vue
const { createApp } = Vue;

createApp({
  data() {
    return {
      listTodo: [],
      newTask: "",
    };
  },
  created() {
    axios.get("server.php").then((resp) => {
      this.listTodo = resp.data;
      console.log(this.listTodo);
    });
  },
  methods: {
    addTask() {
      const data = {
        newTask: this.newTask,
      };
      axios
        .post("server.php", data, {
          headers: { "Content-Type": "multipart/form-data" },
        })
        .then((resp) => {
          this.listTodo = resp.data;
          this.newTask = "";
        });
    },
  },
}).mount("#app");
