<!DOCTYPE html>
<html>
<head>
  <title>The Website</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <script src="script.js"></script>
</head>
<style>
	header {
  background-color: #386d9b;
  color: #0d0a0a;
  padding: 20px;
  text-align: center;
}

nav ul {
  list-style: none;
  padding: 0;
  margin: 0;
  display: flex;
  justify-content: center;
}

nav ul li {
  margin: 0 10px;
}

nav ul li a {
  text-decoration: none;
  color: #333;
  font-weight: bold;
  transition: color 0.3s ease;
}

nav ul li a:hover {
  color: #331373;
}

main {
  max-width: 800px;
  margin: 0 auto;
  padding: 20px;
}

section {
  margin-bottom: 30px;
}

section h2 {
  color: #333;
  font-size: 24px;
  margin-bottom: 10px;
}

section p {
  color: #666;
  line-height: 1.5;
}

form {
  display: grid;
  grid-template-columns: 1fr;
  gap: 10px;
}

input[type="text"],
input[type="email"],
textarea {
  width: 100%;
  padding: 10px;
}

button[type="submit"] {
  background-color: #333;
  color: #fff;
  border: none;
  padding: 10px 20px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

button[type="submit"]:hover {
  background-color: #4000ff;
}

footer {
  background-color: #333;
  color: #fff;
  padding: 20px;
  text-align: center;
}

table {
  width: 100%;
  border-collapse: collapse;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #7f0e0e;
}

th {
  background-color: #386d9b;
  color: #fff;
}
</style>
<body>
  <header>
    <h1>Welcome to our Website</h1>
  </header>
  <nav>
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Services</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
  </nav>
  <main>
    <section>
      <h2>About Us</h2>
      <p>We tend to always be at your service and provide you ease.</p>
    </section>
    <section>
      <h2>Services</h2>
      <ul>
        <li>Web Design</li>
        <li>Graphic Design</li>
        <li>Web Development</li>
      </ul>
    </section>
    <section>
      <h2>Contact Us</h2>
      <form>
        <input type="text" placeholder="Name">
        <input type="email" placeholder="Email">
        <textarea placeholder="Message"></textarea>
        <button type="submit">Send</button>
      </form>
      <table>
        <tr>
          <th>Name</th>
          <th>Id</th>
          <th>Age</th>
          <th>cgpa</th>
        </tr>
<?php
                // Include the database connection file
                include_once 'dbh.inc.php';

                try {
                    // Prepare and execute the query
                    $stmt = $pdo->query("SELECT * FROM students");
                    
                    // Fetch the results and display them in a table
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        echo "<tr>
                                <td>{$row['student_id']}</td>
                                <td>{$row['name']}</td>
                                <td>{$row['age']}</td>
                                <td>{$row['cgpa']}</td>
                              </tr>";
                    }
                } catch(PDOException $e) {
                    // Display an error message if query fails
                    echo "<tr><td colspan='5'>Error: " . $e->getMessage() . "</td></tr>";
                }
                ?>
      </table>
    </section>
  </main>
  <footer>
    <p>&copy; 2024 Our Website. All rights reserved</p>
  </footer>
</body>
</html>