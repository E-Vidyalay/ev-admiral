# Test case 1 : Login
## Improper inputs

### Inputs
* shalin@gmail.com
* shalin

### Outputs
* Could not login

## Proper inputs
### Inputs
* admin@gmail.com

### Outputs
* Successful login

# Test case 2 : View marking scheme

### Inputs
* Select View marking scheme link

### Outputs
* Displays all marking schemes properly

# Test case 3 : Search marking scheme

### Inputs
* 3

### Outputs
* Displays marking schemes which has positive 3 marks for right answer

### Inputs
* 2

### Outputs
* No match found

### Inputs
* 1

### Outputs
* No match found

# Test case 4 : Add marking scheme

### Inputs
* 1 for right answer, 1 for wrong answer

### Outputs
* Marking scheme successfully added

### Inputs
* -1 for right answer, -1 for wrong answer

### Outputs
* Marking scheme successfully added

### Issues
* Should not allow negative values for neither right nor wrong answer

### Inputs
* sf1 for right answer, -1 for wrong answer

### Outputs
* Marking scheme successfully added

### Issues
* Should allow only positive numeric values

### Inputs
* sf1 for right answer, 1 for wrong answer

### Outputs
* Marking scheme successfully added

### Issues
* Should not allow duplicate data

# Test case 5 : Update marking scheme

### Inputs
* 1 for right answer, 1 for wrong answer

### Outputs
* Marking scheme successfully added

### Inputs
* -2 for right answer, -3 for wrong answer

### Outputs
* Marking scheme successfully added

### Issues
* Should not allow negative values for neither right nor wrong answer

### Inputs
* sf1 for right answer, -1 for wrong answer

### Outputs
* Marking scheme successfully added

### Issues
* Should allow only positive numeric values

### Inputs
* sf1 for right answer, 1 for wrong answer

### Outputs
* Marking scheme successfully added

### Issues
* Should not allow duplicate data

# Test case 6 : Post news / Adding Newsletter

### Input
* Data to be entered in the post

### Output
* News saved.