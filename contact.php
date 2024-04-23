<?php

Class ContactBook { Private $contacts = [];

Public function addContact($name, $email, $phone, $address) {
$contact = [‘name’ => $name, ‘email’ => $email, ‘phone’ => $phone, ‘address’ =>
$address];
$this->contacts[] = $contact;
}

Public function updateContact($index
$this->contacts[$index][‘name’] = $name;
$this->contacts[$index][‘email’] = $email;
$this->contacts[$index][‘pho= $address;
}
}

Public function deleteContact($index) { If (isset($this->contacts[$index])) {
Array_splice($this->contacts, $index, 1);
}
}

Public function displayContacts() {
Foreach ($this->contacts as $index => $contact) { Echo “Contact “ . ($index + 1) . “:<br>”;
Echo “Name: “ . $contact[‘name’] . “<br>”;
Echo “Email: “ . $contact[‘email’] . “<br>”;
Echo “Phone: “ . $contact[‘phone’] . “<br>”;
Echo “Address: “ . $contact[‘address’] . “<br><br>”;
}
}
}


$contactBook = new ContactBook();
$contactBook->addContact(“John Doe”, john@example.com, “1234567890”, “123 Main St”);
$contactBook->addContact(“Jane Smith”, jane@example.com, “9876543210”, “456 Elm St”);
$contactBook->updateContact(1, “Jane Smith”, jane_smith@example.com, “9876543210”, “456 Elm St, Apt 2”);
$contactBook->deleteContact(0);
$contactBook->displayContacts();
