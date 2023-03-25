<html>
<!-- when reading this code, it is strongly advised you do not change ANY of the variable names at all, any 
changes inflicted on the variable names could lead to catastrophic outcomes to the functionality of this code.-->

<!-- everything is functional, in correspondence to the testing.cars1 database. -->

<!-- one possible change that could be inflicted is getting the filter button to not reset the form each time it is clicked-->
  <body>
<form id = "filter-form" method="post" action="filterNew.php">
  <label for="make">Make:</label>
  <select name="make" id="make">
    <option value="">Any</option>
    <option value="Audi">Audi</option>
    <option value="BMW">BMW</option>
    <option value="Mercedes">Mercedes</option>
    <option value="Toyota">Toyota</option>
    <option value="Volkswagen">Volkswagen</option>
  </select> <!-- this code is a simple form which takes all of the makes for the cars  -->

  <label for="model">Model:</label>
  <select name="model" id="model">
    <option value="">Any</option>
    <option value="A1">A1</option>
    <option value="A3">A3</option>
    <option value="A5">A5</option>
    <option value="Q5">Q5</option>
    <option value="Q7">Q7</option>
    <option value="3 Series">3 Series</option>
    <option value="5 Series">5 Series</option>
    <option value="4 Series">4 Series</option>
    <option value="X3">X3</option>
    <option value="X5">X5</option>
    <option value="A Class">A Class</option>
    <option value="B Class">B Class</option>
    <option value="C Class">C Class</option>
    <option value="E Class">E Class</option>
    <option value="S Class">S Class</option>
    <option value="Yaris">Yaris</option>
    <option value="Auris">Auris</option>
    <option value="Prius">Prius</option>
    <option value="Corolla">Corolla</option>
    <option value="Avensis">Avensis</option>
    <option value="Golf">Golf</option>
    <option value="Passat">Passat</option>
    <option value="Touran">Touran</option>
    <option value="Up">Up</option>
    <option value="Tiguan">Tiguan</option>
  </select> <!-- this code takes the models for each car. they yet have not been assigned to their respective make-->



  <script>/*this below code assigns each model to their respective make. in order to keep it logically correct.
  and to make sure that each model reflects their respective make when being filtered.*/
    const models = {//this tells the code what make each model should be assigned to
      Volkswagen: ["Golf", "Passat", "Tiguan", "Touran", "Up"],
      Mercedes: ["A Class", "B Class", "E Class", "C Class", "S Class"],
      Audi: ["A1", "A3", "A5", "Q5", "Q7"],
      BMW: ["3 Series", "4 Series", "5 Series", "X3", "X5"],
      Toyota: ["Yaris", "Auris", "Corolla", "Avensis", "Prius"]
    };
    /*in this part of the code below, the EventListener listens for a change in a drop-down menu called "make". when the value in that drop-down menu changes,
     the code looks up an array of models for that make and updates another drop-down menu called "model" with the list of models. 
     if there are no models for that make, the "model" drop-down menu is cleared. and the code adds a default option to the "model" drop-down menu with the text "Select model".*/
    const makeSelect = document.getElementById("make");
    const modelSelect = document.getElementById("model");
    makeSelect.addEventListener("change", (event) => {
      const selectedMake = event.target.value;
      const selectedModels = models[selectedMake] || [];
      while (modelSelect.firstChild) {
        modelSelect.removeChild(modelSelect.firstChild);
      }
      const defaultOption = document.createElement("option");
      defaultOption.value = "";
      defaultOption.textContent = "Select model";
      modelSelect.appendChild(defaultOption);
      selectedModels.forEach((model) => {
        const option = document.createElement("option");
        option.value = model;
        option.textContent = model;
        modelSelect.appendChild(option);
      });
    });
  </script>
  <!-- this form below continues to take inputs from the user to filter the 
price, year mileage, fueltype, drivetype(gearbox), color and condition -->
  <label for="price">Price:</label>
  <select name="price" id="price">
    <option value="">Any</option>
    <option value="1">Less than £10,000</option>
    <option value="2">£10,000 to £15,000</option>
    <option value="3">£15,000 to £20,000</option>
    <option value="4">£20,000 to £30,000</option>
    <option value="5">£30,000 to £40,000</option>
    <option value="6">£40,000 to £50,000</option>
    <option value="7">£50,000 to £100,000</option>
  </select>

  <label for="year">Year:</label>
<select name="year" id="year">
  <option value="">Any</option>
  <option value="2005-2010">2005 - 2010</option>
  <option value="2010-2015">2010 - 2015</option>
  <option value="2015-2020">2015 - 2020</option>
  <option value="2020-newer">2020 or Newer</option>
</select>
<label for="mileage">Mileage:</label>
<select name="mileage" id="mileage">
  <option value="">Any</option>
  <option value="10000">Below 10,000</option>
  <option value="15000">Below 15,000</option>
  <option value="20000">Below 20,000</option>
  <option value="25000">Below 25,000</option>
  <option value="30000">Below 30,000</option>
  <option value="35000">Below 35,000</option>
  <option value="40000">Below 40,000</option>
  <option value="45000">Below 45,000</option>
  <option value="50000">Below 50,000</option>
  <option value="55000">Below 55,000</option>
  <option value="60000">Below 60,000</option>
  <option value="65000">Below 65,000</option>
  <option value="70000">Below 70,000</option>
  <option value="75000">Below 75,000</option>
  <option value="80000">Below 80,000</option>
  <option value="85000">Below 85,000</option>
  <option value="90000">Below 90,000</option>
  <option value="95000">Below 95,000</option>
  <option value="100000">Below 100,000</option>
</select>

<label for="fueltype">Fuel Type:</label>
<select name="fueltype" id="fueltype">
  <option value="">Any</option>
  <option value="petrol">Petrol</option>
  <option value="diesel">Diesel</option>
  <option value="electric">Electric</option>
</select>

<label for="drivetype">Gearbox:</label>
<select name="drivetype" id="drivetype">
  <option value="">Any</option>
  <option value="manual">Manual</option>
  <option value="automatic">Automatic</option>
</select>
<label for="color">Color:</label>
<select name="color" id="color">
  <option value="">Any</option>
  <option value="green">Green</option>
  <option value="black">Black</option>
  <option value="red">Red</option>
  <option value="blue">Blue</option>
  <option value="white">White</option>
  <option value="grey">Grey</option>
</select>
<label for="conditionofcar">Condition:</label>
<select name="conditionofcar" id="conditionofcar">
  <option value="">Any</option>
  <option value="new">New</option>
  <option value="used">Used</option>
</select>

<button type="submit" name="action" value="Filter">Filter</button>

  
</form>
  </body>
</html>

<?php
//connects to database, if theres any issues kill the connection and throw the sql error
include ("connect.php");
if(!$con)
{
    die( mysqli_error($con));
}


// create the SQL query to retrieve car data from the database
$sql = "SELECT * FROM cars1 WHERE 1=1";

/*add filters to the SQL query based on the user input from the search form, 
if the values for each filter elements have been submitted through the POST request, 
it assigns the value to their respective "$" variable and adds a filter to the SQL query 
that includes records where their column name matches the value of their "$" variable name.*/
if (!empty($_POST['make'])) {
    $make = $_POST['make'];
    $sql .= " AND make='$make'";
}

if (!empty($_POST['model'])) {
    $model = $_POST['model'];
    $sql .= " AND model='$model'";
}

if (!empty($_POST['price'])) {
    $price = $_POST['price'];
    switch ($price) {
        case '1':
            $min_price = 0;
            $max_price = 10000;
            break;
        case '2':
            $min_price = 10000;
            $max_price = 15000;
            break;
        case '3':
            $min_price = 15000;
            $max_price = 20000;
            break;
            case '4':
                $min_price = 20000;
                $max_price = 30000;
                break;
            case '5':
                $min_price = 30000;
                $max_price = 40000;
                break;
            case '6':
                $min_price = 40000;
                $max_price = 50000;
                break;
            case '7':
                $min_price = 50000;
                $max_price = 100000;
                break;
    }
    $sql .= " AND price BETWEEN $min_price AND $max_price";
}

if (!empty($_POST['year'])) {
    $year = $_POST['year'];
    switch ($year) {
      case '2005-2010':
        $sql .= " AND year BETWEEN '2005' AND '2010'";
        break;
      case '2010-2015':
        $sql .= " AND year BETWEEN '2010' AND '2015'";
        break;
      case '2015-2020':
        $sql .= " AND year BETWEEN '2015' AND '2020'";
        break;
      case '2020-newer':
        $sql .= " AND year >= '2020'";
        break;
      default:
        // handle invalid input
        break;
    }
  }
  if (!empty($_POST['mileage'])) {
    $mileage = $_POST['mileage'];
    switch ($mileage) {
      case '10000':
        $sql .= " AND mileage < 10000";
        break;
      case '15000':
        $sql .= " AND mileage < 15000";
        break;
      case '20000':
        $sql .= " AND mileage < 20000";
        break;
      case '25000':
        $sql .= " AND mileage < 25000";
        break;
      case '30000':
        $sql .= " AND mileage < 30000";
        break;
      case '35000':
        $sql .= " AND mileage < 35000";
        break;
      case '40000':
        $sql .= " AND mileage < 40000";
        break;
      case '45000':
        $sql .= " AND mileage < 45000";
        break;
      case '50000':
        $sql .= " AND mileage < 50000";
        break;
      case '55000':
        $sql .= " AND mileage < 55000";
        break;
      case '60000':
        $sql .= " AND mileage < 60000";
        break;
      case '65000':
        $sql .= " AND mileage < 65000";
        break;
      case '70000':
        $sql .= " AND mileage < 70000";
        break;
      case '75000':
        $sql .= " AND mileage < 75000";
        break;
      case '80000':
        $sql .= " AND mileage < 80000";
        break;
      case '85000':
        $sql .= " AND mileage < 85000";
        break;
      case '90000':
        $sql .= " AND mileage < 90000";
        break;
      case '95000':
        $sql .= " AND mileage < 95000";
        break;
      case '100000':
        $sql .= " AND mileage < 100000";
        break;
      default:
        // do nothing
        break;
    }
  }
  
  if (!empty($_POST['fueltype'])) {
    $fueltype = $_POST['fueltype'];
    $sql .= " AND fueltype='$fueltype'";
  }
  if (!empty($_POST['drivetype'])) {
    $drivetype = $_POST['drivetype'];
    $sql .= " AND drivetype='$drivetype'";
  }
if (!empty($_POST['color'])) {
    $color = $_POST['color'];
    $sql .= " AND color='$color'";
}
if (!empty($_POST['conditionofcar'])) {
    $conditionofcar = $_POST['conditionofcar'];
    $sql .= " AND conditionofcar='$conditionofcar'";
  }  

// execute the SQL query and retrieve results
$result = $con->query($sql);

// display the car data in html format
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<div Class="car">';
        echo '<h2>' . $row['make'] . ' ' . $row['model'] . '</h2>';
        echo '<p>Year: ' . $row['year'] . '</p>';
        echo '<p>Fuel Type: ' . $row['fueltype'] . '</p>';
        echo '<p>Mileage: ' . $row['mileage'] . '</p>';
        echo '<p>Gearbox: ' . $row['drivetype'] . '</p>';
        echo '<p>Color: ' . $row['color'] . '</p>';
        echo '<p>Condition: ' . $row['conditionofcar'] . '</p>';
        echo '<p>Price: £' . $row['price'] . '</p>';
        echo '</div>';
    }
} else {
    echo '<p>No cars found</p>';
}

// close the database connection
$con->close();


//NOTE THIS IS STILL A WORK IN PROGRESS AND CHANGES MAY BE INFLICTED IF NECESSARY
?>
