<?PHP

require_once("AbstractModel.php");
require_once("Contact.php");

ini_set("display_errors", false);
error_reporting(0);

$contact = new Contact("localhost","root","","evaluation_schema");

$contact->load(1);

print_r($contact->getData()); 
// Should print:
// id => 1,
// name => John Doe
// email => john@doe.com
echo '<br/><br/>';
echo $contact->getData('name');
//Should print:
// John Doe

$contact->setData('name', 'John Walker')->save(); //Should run an UPDATE query
echo '<br/><br/>';

$contact2 = new Contact("localhost","root","","evaluation_schema");

$contact2->setData(array(
    "name" => "Gilbert Barber",
    "email" => "gilbTheparrot@gmail.com"))->save();

print_r($contact->load(1)->getData());
//Should print
// id => 1,
// name => John Walker
// email => john@doe.com
$contact3 = new Contact("localhost","root","","evaluation_schema");
$contact3->setData(array(
"id" => 1,
"name" => "John Doe the 2nd",
"email" => "john@doe2.com"
))->save();
echo '<br/><br/>';
print_r($contact3->load(1)->getData());
//Should print
// id => 1,
// name => John Doe the 2nd
// email => john@doe2.com

$newContact = new Contact("localhost","root","","evaluation_schema");
$newContact->setData(array(
    "name" => "Gilbert Barber",
    "email" => "gilbTheparrot@gmail.com"
));

$newContact->save(); //Should run an INSERT query as there is no predefined id
echo '<br/><br/>';
print_r($newContact->getData());
//Should print
// id => ? some auto increment number,
// name => Gilbert Barber
// email => gilbTheparrot@gmail.com

$newContact->delete(); //Should delete him Gilbert Barber from the database
