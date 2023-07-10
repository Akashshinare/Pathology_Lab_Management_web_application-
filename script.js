document.getElementById('login-form').addEventListener('submit', function(e) {
    e.preventDefault();
  
    // Get the entered username and password
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
  
    // Validate the credentials and perform login
    if (username === 'test@kennect.io' && password === 'Qwerty@1234') {
      document.getElementById('login-container').style.display = 'none';
      document.getElementById('home-container').style.display = 'block';
      loadTodos();
    } else {
      alert('Invalid username or password. Please try again.');
    }
  });
  
  function loadTodos() {
    // Fetch the list of todos from the server using AJAX or fetch API
    // Update the todo-list div with the fetched data
    // Example:
    var todoList = document.getElementById('todo-list');
    var todos = ['Todo 1', 'Todo 2', 'Todo 3'];
    todos.forEach(function(todo) {
      var listItem = document.createElement('li');
      listItem.textContent = todo;
      todoList.appendChild(listItem);
    });
  }
  