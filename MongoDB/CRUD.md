# CRUD MongoDB

The database's name is **RemoteApplication**, it's have the collection *Institute*,*Sensor*,*Actuator*,*Board*,*Component*,*Experiment*,*Feature*,*People* and *Request*. On this document there are the CRUD instructions.

Based on a relational model :

![Relational database](/image/model.png)

* Create database
```
use RemoteApplication
```

* Create collection *Institute*.
```
db.createCollection("Institute")
```

* Create collection *Sensor*:
```
db.createCollection("Sensor")
```

* Create collection *Actuator*:
```
db.createCollection("Actuator")
```

* Create collection *Board*:
```
db.createCollection("Board")
```

* Create collection *Component*:
```
db.createCollection("Component")
```

* Create collection *Experiment*:
```
db.createCollection("Experiment")
```

* Create collection *Feature*:
```
db.createCollection("Feature")
```

* Create collection *People*:
```
db.createCollection("People")
```

* Create collection *Request*:
```
db.createCollection("Request")
```

* Insert new document *Collection Institute*:
```
db.Institute.insert({
  name: 'Instituto Federal de ciência, tecnologia e inovação de Santa Catarina',
  initials: 'IFSC',
  address: 'R. José Lino Kretzer, 608',
  city : 'São José',
  state : 'Santa Catarina',
  CEP : '88103-310',
});
```

* Insert new document *Collection Sensor*:
```
db.Sensor.insert({
  name: 'Sensor de Umidade do Solo Higrômetro',
  type: 'Digital e Analógica',
  value: 22,
  voltage: '3,3-5v',
  tradeMark: 'FilipeFlop',
  model: 'REF: 9SS19',
});
```

* Insert new document *Collection Actuator*:
```
db.Actuator.insert({
  name: 'Chave Táctil Push-Button',
  type: 'Digital',
  value: 1,
  maxim_Voltage: '250V',
  maxim_Current: '50mA',
  tradeMark: 'FilipeFlop',
  model: 'REF: BCE04',
});
```

* Insert new document *Collection Board*:
```
db.Board.insert({
  name: 'Raspberry',
  tradeMark: 'Raspberry Pi',
  model: 'Pi 3 Model B Anatel',
  processor : 'Broadcom BCM2837',
  clock: '1.2 GHz',
  RAM memory: '1GB',
  GPIO: '40',
});
```

* Insert new document *Collection Component*:
```
db.Component.insert({
  name: 'Rebite de Repuxo',
  type: 'estrutural',
  material: 'Mandril de Aço Corpo de Aço',
  finished: 'Zincado Branco',
  head type: 'Aba Abaulada',
  length:	'10 cm',
  diameter:	'2,4 mm',
  tradeMark: 'Vonder',
});
```
```
db.Component.insert({
  name: 'Capacitor',
  type: 'elétrico'
  capacitance: '12uf',
  maxim_Voltage: '250v',
  frequency: '50/60hz',
  voltage: '220v',
});
```
* Insert new document *Collection Experiment*:
```
db.Experiment.insert({
  name: 'honda',
  make: 'accord',
  year: '2010',
});
```

* Insert new document *Collection Feature*:
```
db.Feature.insert({
  name: 'honda',
  make: 'accord',
  year: '2010',
});
```

* Insert new document *Collection People*:
```
db.People.insert({
  name: 'honda',
  make: 'accord',
  year: '2010',
});
```

* Insert new document *Collection Request*:
```
db.Request.insert({
  name: 'honda',
  make: 'accord',
  year: '2010',
});
```
