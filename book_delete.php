<?php
/**  FileName = book_delete.PHP
 *  Description :  This Page will Delete book detais from the database
 *  STUEDENT NAME = RUTUL PATEL
 *  STUDENT NUMBER : 200335158
 *  AUTHOR NAME : RUTUL PATEL
 *  WEBSITE purpose : Assginment 1
 *  
 */
include_once('database.php');

/*//////////////////////*/
/* YOUR CODE GOES HERE */
/*/////////////////////*/

$bookID = $_GET["bookID"]; // assigns the bookID from the URL
if($bookID != false) {
    $query = "DELETE FROM books WHERE Id = :book_id";
    $statement = $db->prepare($query);// encapsulate the sql statement
    $statement->bindValue(":book_id", $bookID);
    $success = $statement->execute(); // execute the prepared query
    $statement->closeCursor(); // close off database
}
header('Location: index.php');

?>
