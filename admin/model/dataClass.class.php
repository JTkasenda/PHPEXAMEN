<?php
class DataClass
{
    const DB_host = 'localhost';
    const DB_Name = 'food_order';
    const user = 'root';
    const password = '';

    private $conn = null;

    public function __construct()
    {
        $connectionString = sprintf("mysql:host=%s;dbname=%s;charset=utf8;port=3306", DataClass::DB_host, DataClass::DB_Name, PDO::ERRMODE_EXCEPTION);
        try {
            $this->conn = new PDO($connectionString, DataClass::user, DataClass::password);
        } catch (PDOException $ex) {
            die($ex->getMessage());
        }
    }


    public function Save_Admin(array $data_form)
    {

        $sql = "INSERT INTO Admin (Fullname,username, Password) VALUES (?,?,?)";
        $stmt = $this->conn->prepare($sql);
        $password = sha1($data_form['password']);
        $stmt->bindParam(1, $data_form['full_name']);
        $stmt->bindParam(2, $data_form['username']);
        $stmt->bindParam(3, $password);
        $stmt->execute();
        $message = $stmt->errorInfo();

        return $message;
    }

    public function update_Admin(array $data_form)
    {
        $sql = "UPDATE Admin SET Fullname= ?, password=?, username = ? WHERE username = ?";
        $stmt = $this->conn->prepare($sql);
        $password = sha1($data_form['password']);
        $stmt->bindParam(1, $data_form['full_name']);
        $stmt->bindParam(2, $password);
        $stmt->bindParam(3, $data_form['user']);
        $stmt->bindParam(4, $data_form['username']);
        $stmt->execute();
        $message = $stmt->errorInfo();

        return $message;
    }

    public function delete_Admin(string $email)
    {
        $sql = "DELETE FROM Admin WHERE username = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $email);
        $stmt->execute();
        $message = $stmt->errorInfo();

        return $message;
    }

    public function SearchAll_Admin()
    {
        $sql = "SELECT * FROM Admin";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $message = $stmt->errorInfo();

        return $stmt->fetchAll();
    }

    public function SearchOne_Admin(string $email, string $password)
    {
        $sql = "SELECT * FROM Admin WHERE email = ? AND Password = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $email);
        $stmt->bindParam(2, $password);
        $stmt->execute();
        $message = $stmt->errorInfo();

        return $message;
    }

    public function count_admins(){
        $sql = "SELECT  Count(*) AS TOTAL FROM Admin";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $message = $stmt->errorInfo();

        return $stmt->fetchAll();
    }

    public function count_plats(){
        $sql = "SELECT  Count(*) AS TOTAL FROM food";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $message = $stmt->errorInfo();

        return $stmt->fetchAll();
    }

    public function count_categories(){
        $sql = "SELECT  Count(*) AS TOTAL FROM category";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $message = $stmt->errorInfo();

        return $stmt->fetchAll();
    }

    public function count_order(){
        $sql = "SELECT  Count(*) AS TOTAL FROM order";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $message = $stmt->errorInfo();

        return $stmt->fetchAll();
    }
    public function Save_commande(array $data_form)
    {

        $sql = "INSERT INTO commande (Tel,Email,Adresse, Status) VALUES (?,?,?,?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $data_form['Tel']);
        $stmt->bindParam(2, $data_form['email']);
        $stmt->bindParam(3, $data_form['adresse']);
        $stmt->bindParam(4, $data_form['Status']);
        $stmt->execute();
        $message = $stmt->errorInfo();

        return $message;
    }

    public function update_commande(array $data_form, int $id)
    {
        $sql = "UPDATE commande SET Tel= ?, Email=?, Adresse=?, Status=? WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $data_form['Tel']);
        $stmt->bindParam(2, $data_form['Email']);
        $stmt->bindParam(3, $data_form['Adresse']);
        $stmt->bindParam(4, $data_form['Status']);
        $stmt->bindParam(5, $id);
        $stmt->execute();
        $message = $stmt->errorInfo();

        return $message;
    }

    public function delete_commande(int $id)
    {
        $sql = "DELETE FROM commande WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        $message = $stmt->errorInfo();

        return $message;
    }

    public function SearchAll_commande()
    {
        $sql = "SELECT * FROM commande";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $message = $stmt->errorInfo();

        return $message;
    }

    public function SearchOne_commande(int $id)
    {
        $sql = "SELECT * FROM commande WHRE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        $message = $stmt->errorInfo();

        return $message;
    }

    public function Save_livreur(array $data_form)
    {

        $sql = "INSERT INTO livreur (nom,Prenom) VALUES (?,?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $data_form['nom']);
        $stmt->bindParam(2, $data_form['Prenom']);
        $stmt->execute();
        $message = $stmt->errorInfo();

        return $message;
    }

    public function update_livreur(array $data_form, int $id)
    {
        $sql = "UPDATE livreur SET nom= ?, Prenom = ? WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $data_form['nom']);
        $stmt->bindParam(2, $data_form['Prenom']);
        $stmt->bindParam(3, $id);
        $stmt->execute();
        $message = $stmt->errorInfo();

        return $message;
    }

    public function delete_livreur(int $id)
    {
        $sql = "DELETE FROM livreur WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        $message = $stmt->errorInfo();

        return $message;
    }

    public function SearchAll_livreur()
    {
        $sql = "SELECT * FROM livreur";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $message = $stmt->errorInfo();

        return $message;
    }

    public function SearchOne_livreur(int $id)
    {
        $sql = "SELECT * FROM livreur WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        $message = $stmt->errorInfo();

        return $message;
    }

    public function Save_menu(array $data_form)
    {

        $sql = "INSERT INTO category (id, title, Image, featured, active) VALUES (?,?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $data_form['ID']);
        $stmt->bindParam(2, $data_form['cat_name']);
        $stmt->bindParam(3, $data_form['image']);
        $stmt->bindParam(4, $data_form['featured']);
        $stmt->bindParam(5, $data_form['active']);
        $stmt->execute();
        $message = $stmt->errorInfo();

        return $message;
    }

    public function Save_food(array $data_form)
    {

        $sql = "INSERT INTO food (id, f_title, description, Price, Image,category_title, featured, active) VALUES (?,?, ?, ?, ?, ?,?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $data_form['ID']);
        $stmt->bindParam(2, $data_form['f_name']);
        $stmt->bindParam(3, $data_form['desc']);
        $stmt->bindParam(4, $data_form['price']);
        $stmt->bindParam(5, $data_form['image']);
        $stmt->bindParam(6, $data_form['category']);
        $stmt->bindParam(7, $data_form['featured']);
        $stmt->bindParam(8, $data_form['active']);
        $stmt->execute();
        $message = $stmt->errorInfo();

        return $message;
    }


    public function Save_order(array $data_form)
    {
        $sql = "INSERT INTO commande (food_title, customer_email, Quantity, order_date,status) VALUES (?,?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $data_form['ID']);
        $stmt->bindParam(2, $data_form['']);
        $stmt->bindParam(3, $data_form['qty']);
        $stmt->bindParam(4, $data_form['price']);
        $stmt->bindParam(5, $data_form['image']);
        $stmt->bindParam(6, $data_form['category']);
        $stmt->bindParam(7, $data_form['featured']);
        $stmt->bindParam(8, $data_form['active']);
        $stmt->execute();
        $message = $stmt->errorInfo();

        return $message;
    }


    public function SearchAll_Food()
    {
        $sql = "SELECT * FROM Food";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $message = $stmt->errorInfo();

        return $stmt->fetchAll();
    }

    public function SearchAll_Food_Category($Category)
    {
        $sql = "SELECT * FROM Food Where category_title = '$Category'";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $message = $stmt->errorInfo();

        return $stmt->fetchAll();
    }

    public function SearchAll_Food_Yes()
    {
        $sql = "SELECT * FROM Food Where featured = 'oui'";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $message = $stmt->errorInfo();

        return $stmt->fetchAll();
    }

    public function update_Food(array $data_form)
    {
        $sql = "UPDATE food SET f_title = ?, description=?, Price = ?, image= ?, category_title=?, featured = ?, active=? WHERE f_title = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $data_form['name']);
        $stmt->bindParam(2, $data_form['desc']);
        $stmt->bindParam(3, $data_form['price']);
        $stmt->bindParam(4, $data_form['image']);
        $stmt->bindParam(5, $data_form['category']);
        $stmt->bindParam(6, $data_form['featured']);
        $stmt->bindParam(7, $data_form['active']);
        $stmt->bindParam(8, $data_form['f_name']);
        $stmt->execute();
        $message = $stmt->errorInfo();

        return $message;
    }

    public function delete_Food($id)
    {
        $sql = "DELETE FROM food WHERE f_title = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        $message = $stmt->errorInfo();
        return $message;
    }

    public function generate_ID($entity)
    {
        $stamp = time();
        if ($entity == "food") :
            return strtoupper("F" . substr((md5($stamp)), 0, 10));

        elseif ($entity == "Category") :
            return strtoupper("C" . substr((md5($stamp)), 0, 10));
        else :
            return "error: entity not valid";
        endif;
    }

    public function update_menu(array $data_form)
    {
        $sql = "UPDATE Category SET title= ?, image= ?, featured = ?, active = ? WHERE title = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $data_form['cat']);
        $stmt->bindParam(2, $data_form['image']);
        $stmt->bindParam(3, $data_form['featured']);
        $stmt->bindParam(4, $data_form['active']);

        $stmt->bindParam(5, $data_form['cat_name']);
        $stmt->execute();
        $message = $stmt->errorInfo();

        return $message;
    }

    public function delete_menu($id)
    {
        $sql = "DELETE FROM Category WHERE title = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        $message = $stmt->errorInfo();

        return $message;
    }

    public function SearchAll_menu()
    {

        $sql = "SELECT * FROM category";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $message = $stmt->errorInfo();

        return $stmt->fetchAll();
    }

    public function SearchAll_menu_Yes()
    {

        $sql = "SELECT * FROM category Where featured = 'oui'";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $message = $stmt->errorInfo();

        return $stmt->fetchAll();
    }

    public function SearchOne_menu(int $id)
    {
        $sql = "SELECT * FROM menu WHERE idPlat = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        $message = $stmt->errorInfo();

        return $message;
    }

    public function Save_plat(array $data_form)
    {

        $sql = "INSERT INTO plat (name, speciale, description, price) VALUES (?,?,?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $data_form['name']);
        $stmt->bindParam(2, $data_form['speciale']);
        $stmt->bindParam(3, $data_form['description']);
        $stmt->bindParam(4, $data_form['price']);
        $stmt->execute();
        $message = $stmt->errorInfo();

        return $message;
    }

    public function update_plat_commande(array $data_form, int $id)
    {
        $sql = "UPDATE plat_commande SET idCommande= ?, idPlat= ?, Quantite = ? WHERE idCommPlat = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $data_form['idCommande']);
        $stmt->bindParam(2, $data_form['idPlat']);
        $stmt->bindParam(3, $data_form['Quantite']);
        $stmt->bindParam(4, $id);
        $stmt->execute();
        $message = $stmt->errorInfo();

        return $message;
    }

    public function delete_plat_commande(int $id)
    {
        $sql = "DELETE FROM plat_commande WHERE idCommPlat = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        $message = $stmt->errorInfo();

        return $message;
    }

    public function SearchAll_plat()
    {
        $sql = "SELECT * FROM plat";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $message = $stmt->errorInfo();
        $Data = $stmt->fetchAll();
        foreach ($Data as  $date) {
            echo "<thead>
            <th>Nom du plat</th>
            <th>Ingredients</th>
            <th>Prix</th>
            <th>Actions</th>
            </thead>";

            echo "<tr id='" . $date["id"] . "'>";
            echo "<td>" . $date["NAME"] . "</td>";
            echo "<td>" . $date["description"] . "</td>";
            echo "<td>" . $date["PRICE"] . "</td>";

            echo "<td>";
            echo "<div class='action'>";
            echo "<button class='btn one' id='newAgent1' onclick='Update();'>Modifier</button>
                <button type='button' class='btn two' onclick='deleteAgent()'>Supprimer</button>
            </div>
        </td>";
            echo "<tr>";
        }
    }

    public function SearchOne_plat_commande(int $id)
    {
        $sql = "SELECT * FROM plat_commande WHERE idCommPlat = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        $message = $stmt->errorInfo();

        return $message;
    }
}
