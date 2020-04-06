//Write a Sci-Lab Program to find the Eigen values and Eigen vectors of any square matrix of size 3*3.
//vectors are stored in the columns of A
clc;close;clear;
disp('Enter the vectors to be stored in  matrix A');
a11=input("Enter a11: ");
a12=input("Enter a12: ");
a13=input("Enter a13: ");
b21=input("Enter b21: ");
b22=input("Enter b22: ");
b23=input("Enter b23: ");
c31=input("Enter c31: ");
c32=input("Enter c32: ");
c33=input("Enter c33: ");
A=[a11,b21,c31;a12,b22,c32;a13,b23,c33];
disp(A,'The given Matrix is')
lam=poly(0,'lam')
lam=lam
charMat=A-lam*eye(3,3)
disp(charMat,'The characterstic Matrix is')
charPoly=poly(A,'lam')
disp(charPoly,'the characterstic polynomial is')
lam=spec(A)
disp(lam,'the eigen values of A are')
function[x,lam]= eigenvectors(A)
[n,m]=size(A);
lam=spec(A)';
 x=[];
for k=1:3
    B=A-lam(k)*eye(3,3);//charcterstic matrix;
    C=B(1:n-1,1:n-1);//coeff matrix for the reduced system
    b=-B(1:n-1,n);//RHS vector for the reduced system
    y=C\b;//solution for the reduced system
    y=[y;1];//complete eigen vector
    y=y/norm(y);//make unit eigen vector
    x=[x y];
end
endfunction
//End of function
get f(eigenvectors)
[x,lam]= eigenvectors(A)
disp(x,'The eigen vectors of A are');

