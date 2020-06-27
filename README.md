# Processwire-Simple-Address-Inputfield-Fieldtype
A simple inputfield to store an address.

## What it does

This fieldtype let you enter various data of an address such as street, number, postalcode,....
![alt text](https://github.com/juergenweb/Processwire-Simple-Address-Inputfield-Fieldtype/blob/master/SimpleAddress.png?raw=true)

### Output the values in templates

There's a property for each dimension

```
echo $page->fieldname->street;
echo $page->fieldname->number;
echo $page->fieldname->postalcode;
echo $page->fieldname->city;
echo $page->fieldname->state;
echo $page->fieldname->country;
```

### Use in selectors strings

The city (or other values) can be used in selectors like:

`$pages->find("address.city=New York");`

### Field Settings

At the moment there are no settings included.

### To do

I have planned to include settings for required fields, so you can individual select if an inputfield is required or not.

## How to install

1. Download and place the module folder named "FieldtypeSimpleAddress" in:
/site/modules/

2. In the admin control panel, go to Modules. At the bottom of the
screen, click the "Check for New Modules" button.

3. Now scroll to the FieldtypeSimpleAddress module and click "Install". The required InputfieldSimpleAddress will get installed automatic.

4. Create a new Field with the new "SimpleAddress" Fieldtype.

