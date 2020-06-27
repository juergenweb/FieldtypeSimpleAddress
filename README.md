# Processwire-Simple-Address-Inputfield-Fieldtype
A simple inputfield and fieldtype to store an address. There is no special functionality inside, but the big advantage is, that you don´t need to use multiple fields in ProcessWire and each field of the address is fully searchable. Adding only 1 field is much more comfortable.

## What it does

This fieldtype let you enter various data of an address such as street, number, postalcode,....
![alt text](https://github.com/juergenweb/Processwire-Simple-Address-Inputfield-Fieldtype/blob/master/SimpleAddress.png?raw=true)

### Output the values in templates

There's a property for each address item

```
echo $page->fieldname->street;
echo $page->fieldname->number;
echo $page->fieldname->postalcode;
echo $page->fieldname->city;
echo $page->fieldname->state;
echo $page->fieldname->country;
```

You can render a complete address string like

```
echo $page->fieldname;
```

This will output fe the following HTML:

```
<address>MyStreet 12<br>4020 Linz<br>Upper Austria<br>Austria</address>
```

If you want to customize your code, you should better use the following method in your template:

```
echo $page->fieldname->renderAddress(['separator' => ' - ', 'class' => 'myclass']);
```

This will output the following HTML:

```
<address class="myclass">MyStreet 12 - 4020 Linz - Upper Austria - Austria</address>
```

As you can see you have 2 options (optional) to control your output:

1. separator: This is the markup that should be between the various parts of an address 
2. class: You can add a CSS-class if necessary to style your address markup


### Use in selectors strings

The city (or other values) can be used in selectors like:

`$pages->find("fieldname.city=New York");`

### Field Settings

At the moment there are no settings included.

### To do

I have planned to include settings for required fields, so you can select if an inputfield should be required or not.

## How to install

1. Download and place the module folder named "FieldtypeSimpleAddress" in:
/site/modules/

2. In the admin control panel, go to Modules. At the bottom of the
screen, click the "Check for New Modules" button.

3. Now scroll to the FieldtypeSimpleAddress module and click "Install". The required InputfieldSimpleAddress will get installed automatic.

4. Create a new Field with the new "SimpleAddress" Fieldtype.

