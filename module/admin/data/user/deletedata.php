<?
include("dbconf.php");
$id = $_GET['id'];
//echo "$id";
if(isset($id))
{
        $del = $id;
        $sql=$con->query("DELETE FROM user WHERE id=".$del);
    	
    
    if($sql)
    {
        ?>
        <script>
        alert('Data ke <?php echo $id; ?> telah di hapus !!!');
        window.location.href='?page=user';
        </script>
        <?php
    }
    else
    {
        ?>
        <script>
        alert('Error !!! , Coba Lagi!');
        window.location.href='?page=user';
        </script>
        <?php
    }
    
}
?>
