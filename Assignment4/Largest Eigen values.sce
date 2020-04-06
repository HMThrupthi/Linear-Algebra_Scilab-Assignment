clear;clc;close();
// Find the largest Eigen value of A 
disp('Enter the vectors to be stored in  matrix A');//vectors are stored in the columns of A
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
disp(A,'The given Matrix is' )
u0=[1 1 1]';
disp(u0,'The initial vector is')
v=A*u0;
a=max(u0);
disp(a,'First approximation to eogen value is');
while abs(max(v)-a)>0.002
    disp(v,"current eigen vector is")
    a=max(v);
    disp(a,"current eigen value is")
    u0=v/max(v);
    v=A*u0;
end
format('v',4);
disp(max(v),"the larget Eigen value is:")
format('v',5)
disp(u0,"The corresponding Eigen vectors is:")
