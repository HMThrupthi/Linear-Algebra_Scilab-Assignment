//Find the Four Fundamental Subspaces for any 3*3 matrix given as user input using input() function

disp('Please enter the matrix A');
//Taking input of Matrix A
a11=input("Enter a11: ");
a12=input("Enter a12: ");
a13=input("Enter a13: ");
a21=input("Enter a21: ");
a22=input("Enter a22: ");
a23=input("Enter a23: ");
a31=input("Enter a31: ");
a32=input("Enter a32: ");
a33=input("Enter a33: ");

A=[a11,a12,a13;a21,a22,a23;a31,a32,a33];
a=A;
disp(A,"A");
//Collecting the dimensions of A matrix
[m,n]=size(A); 
disp(m,'m=');
disp(n,'n=');

//Using rref which computes the row Echelon form of matrix A by LU transformations
[v,pivot]=rref(A);
disp(rref(A));
disp(v);
r=length(pivot);
disp(r,'rank=');
column_space=A(:,pivot);
disp(column_space,'Column Space=');


// Using kernal which computes the null space of the given matrix
null_space=kernel(A); 
disp(null_space,'Null Space=');

Row_space=v(1:r,:)';
disp(Row_space,'Row Space=');

//Applying kernel on A transpose matrix, we can get the left null space 
Left_Null_space=kernel(A');
disp(Left_Null_space,'Left Null Space=');
