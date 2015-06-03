# Test case 1 : Login
## 1.1 Improper inputs

### Inputs
* shalin@gmail.com
* shalin

### Outputs
* Could not login

## 1.2 Proper inputs
### Inputs
* admin@gmail.com

### Outputs
* Successful login

# Test case 2 : View marking scheme
##2.1
### Inputs
* Select View marking scheme link

### Outputs
* Displays all marking schemes properly

# Test case 3 : Search marking scheme
##3.1
### Inputs
* 3

### Outputs
* Displays marking schemes which has positive 3 marks for right answer

##3.2
### Inputs
* 2

### Outputs
* No match found

## 3.3
### Inputs
* 1

### Outputs
* No match found

# Test case 4 : Add marking scheme
## 4.1
### Inputs
* 1 for right answer, 1 for wrong answer

### Outputs
* Marking scheme successfully added

## 4.2
### Inputs
* -1 for right answer, -1 for wrong answer

### Outputs
* Marking scheme successfully added

### Issues
* Should not allow negative values for neither right nor wrong answer

## 4.3
### Inputs
* sf1 for right answer, -1 for wrong answer

### Outputs
* Marking scheme successfully added

### Issues
* Should allow only positive numeric values

#4.4
### Inputs
* sf1 for right answer, 1 for wrong answer

### Outputs
* Marking scheme successfully added

### Issues
* Should not allow duplicate data

# Test case 5 : Update marking scheme
## 5.1
### Inputs
* 1 for right answer, 1 for wrong answer

### Outputs
* Marking scheme successfully added

## 5.2
### Inputs
* -2 for right answer, -3 for wrong answer

### Outputs
* Marking scheme successfully added

### Issues
* Should not allow negative values for neither right nor wrong answer

## 5.3
### Inputs
* sf1 for right answer, -1 for wrong answer

### Outputs
* Marking scheme successfully added

### Issues
* Should allow only positive numeric values

## 5.4
### Inputs
* sf1 for right answer, 1 for wrong answer

### Outputs
* Marking scheme successfully added

### Issues
* Should not allow duplicate data

# Test case 6 : Post news / Adding Newsletter
## 6.1
### Input
* Data to be entered in the post

### Output
* News saved.