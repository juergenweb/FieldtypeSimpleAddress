# Processwire-Simple-Address-Inputfield-Fieldtype
A simple inputfield and fieldtype to store an address and optional geo-coordinates.<br />
There is no special functionality inside, but the big advantage is, that you don´t need to use multiple fields in ProcessWire and each field of the address is fully searchable.<br /> 
As an addition you can add longitude and latitude of an address for usage in maps too. 

The coordinates will not be geocoded automatically, so you have to enter them manually. The advantage is that you do not need an API-Key or a registration at Google or other providers, so you are completely independent and you can use these coordinates in your prefered maps.

## What it does

This fieldtype let you enter various data of an address such as street, number, postalcode,.... and optional latitude and longitude (not visible in the image below, but they will be displayed below the last inputfield if they are enabled in the configuration settings of this inputfield).
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
You can grab the coordinates with
```
echo $page->fieldname->lat;
echo $page->fieldname->lng;
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

1. separator: This is the markup that should be between the various parts of an address (fe a HTML tag or a simple string like '-')
2. class: You can add a CSS-class if necessary to style your address markup later on

There is also a method to get latitude and longitude in one string

```
echo $page->address->renderLatLng();
```

This will output fe 

```
41.12345678, 23.987654
```
and can be used in maps just like Leaflet Map or others.


### Use in selectors strings

The city (or other values) can be used in selectors like:

`$pages->find("fieldname.city=New York");`

### Field Settings

You can select which fields of the address (and coordinates) are mandatory. By default all fields are optional.
You can also choose if coordinate fields should be displayed in the inputfield too.


### To do

At the moment nothing planned.

## How to install

1. Download and place the module folder named "FieldtypeSimpleAddress" in:
/site/modules/

2. In the admin control panel, go to Modules. At the bottom of the
screen, click the "Check for New Modules" button.

3. Now scroll to the FieldtypeSimpleAddress module and click "Install". The required InputfieldSimpleAddress will get installed automatic.

4. Create a new Field with the new "SimpleAddress" Fieldtype.

