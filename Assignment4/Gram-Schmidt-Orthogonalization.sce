
//Write a Sci-Lab Program to implement the Gram- Schmidt Orthogonalization in R3.

//Enter the independent vectors store in matrix A as columns.
clear;close;clc;
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

disp(A, 'A=');
[m,n]=size(A);
for k=1:n
    V(:,k)=A(:,k);
    for j=1:k-1
        R(j,k)=V(:,j)'*A(:,k);
        
        
           V(:,k)=V(:,k)-R(j,k)*V(:,j);
        end
        R(k,k)=norm(V(:,k));
        V(:,k)=V(:,k)/R(k,k);
end
disp(V,'Q=');
