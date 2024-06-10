<?php
// Conexão com o banco de dados
$host = 'localhost';
$dbname = 'seu_banco_de_dados';
$username = 'seu_usuario';
$password = 'sua_senha';

try {
    $pdo = new PDO("pgsql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro ao conectar ao banco de dados: " . $e->getMessage());
}

// Verifica se o formulário de edição foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['edit_id'])) {
    $editId = $_POST['edit_id'];
    $newCnpj = $_POST['new_cnpj'];
    $newRazaoSocial = $_POST['new_razao_social'];
    $newNomeFantasia = $_POST['new_nome_fantasia'];

    // Prepara a consulta SQL de atualização
    $sql = "UPDATE estabelecimento SET cnpj = :new_cnpj, razaosocial = :new_razao_social, nomefantasia = :new_nome_fantasia WHERE id = :edit_id";

    // Executa a consulta preparada
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':edit_id', $editId);
    $stmt->bindParam(':new_cnpj', $newCnpj);
    $stmt->bindParam(':new_razao_social', $newRazaoSocial);
    $stmt->bindParam(':new_nome_fantasia', $newNomeFantasia);

    try {
        $stmt->execute();
        header("Location: listar_estabelecimentos.php"); // Redireciona após a edição
        exit();
    } catch (PDOException $e) {
        die("Erro ao atualizar registro: " . $e->getMessage());
    }
} elseif ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $editId = $_GET['id'];

    // Consulta SQL para obter os dados do estabelecimento a ser editado
    $sql = "SELECT id, cnpj, razaosocial, nomefantasia FROM estabelecimento WHERE id = :edit_id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':edit_id', $editId);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$row) {
        die("Estabelecimento não encontrado.");
    }

    // Preenche os campos do formulário com os dados do estabelecimento
    $cnpj = $row['cnpj'];
    $razaoSocial = $row['razaosocial'];
    $nomeFantasia = $row['nomefantasia'];
} else {
    die("Acesso inválido.");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Estabelecimento</title>
</head>

<body>
    <h1>Editar Estabelecimento</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="hidden" name="edit_id" value="<?php echo $editId; ?>">
        CNPJ: <input type="text" name="new_cnpj" value="<?php echo $cnpj; ?>" required><br><br>
        Razão Social: <input type="text" name="new_razao_social" value="<?php echo $razaoSocial; ?>" required><br><br>
        Nome Fantasia: <input type="text" name="new_nome_fantasia" value="<?php echo $nomeFantasia; ?>" required><br><br>
        <input type="submit" value="Salvar">
    </form>
</body>

</html>
