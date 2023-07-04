<?php 
	/**
	 * 
	 */
	class MyDBOperations
	{
		private $db;
		
		function __construct($my_conn)
		{
			$this->db = $my_conn;
			// var_dump($this->db);
		}

		function insertCategoryData($name) {
			try{
				$sql = "INSERT INTO categories(category_name) VALUES(:category)";
				$statement = $this->db->prepare($sql);
				$statement->bindParam(':category', $name);
				$statement->execute();

			}catch (Exception $e) {
				echo $e->getMessage();
			}
		}

		function getTableData($tableName){
			$sql = "SELECT * FROM $tableName";
			$statement = $this->db->prepare($sql);
			$statement->execute();
			$result = $statement->fetchAll();
			return $result;

		}

		function updateCategoryData($id, $name) {
			$sql = "UPDATE categories SET category_name=:name WHERE category_id=:id";
			$statement = $this->db->prepare($sql);
			$statement->bindParam(':name', $name);
			$statement->bindParam(':id', $id);
			$statement->execute();

		}

		function deleteCategoryData($id) {
			$sql = "DELETE FROM categories WHERE category_id=:id";
			$statement = $this->db->prepare($sql);
			$statement->bindParam(':id', $id);
			$statement->execute();
		}

		function insertItemData($item_name, $destination, $category_id, $item_price, $item_desc, $item_qty) {
			$sql = "INSERT INTO items(item_name, item_image, category_id, item_price, item_desc, item_qty) VALUES(:name, :image, :category, :price, :item_desc, :qty)";

			$statement = $this->db->prepare($sql);
			$statement->bindParam(':name', $item_name);
			$statement->bindParam(':image', $destination);
			$statement->bindParam(':category', $category_id);
			$statement->bindParam(':price', $item_price);
			$statement->bindParam(':item_desc', $item_desc);
			$statement->bindParam(':qty', $item_qty);
			$statement->execute();
		}

		function updateItemData($item_id, $item_name, $item_price, $item_desc, $item_qty) {
			$sql = "UPDATE items SET item_name = :name, item_price=:price, item_desc=:item_desc, item_qty=:qty WHERE item_id=:id";
			$statement = $this->db->prepare($sql);
			$statement->bindParam(':name', $item_name);
			$statement->bindParam(':price', $item_price);
			$statement->bindParam(':item_desc', $item_desc);
			$statement->bindParam(':qty', $item_qty);
			$statement->bindParam(':id', $item_id);
			$statement->execute();
		}

		function deleteItemData($id) {
			$sql = "DELETE FROM items WHERE item_id=:id";
			$statement = $this->db->prepare($sql);
			$statement->bindParam(':id', $id);
			$statement->execute();
		}

		function checkData($username, $password) {
			$result = $this->getTableData('admin');
			$message = '';
			foreach ($result as $row) {
				$admin_username = $row['admin_username'];
				$admin_password = $row['admin_password'];
				if ($admin_username == $username) {
					if ($admin_password == $password) {

						$myArray = array($admin_username, $admin_password);
						session_start();
						$_SESSION['loginStatus'] = true;
						$_SESSION['loginUser'] = $myArray;
						header('location: categories.php');
					} else {
						$message = "Invalid Password";
						return $message;
					}
				} else {
					$message = "User doesn't exist!";
					return $message;
				}
			}
		}
	}

	?>