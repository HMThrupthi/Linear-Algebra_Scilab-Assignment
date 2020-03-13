//To span column space of any 3*3 matrix give as user input using input() function
disp('Enter the coefficient matrix');

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

disp('Enter the matrix of Constants');

b1=input("Enter b1: ");
b2=input("Enter b2: ");
b3=input("Enter b3: ");

b=[b1;b2;b3];
Aug=[A b];
a=Aug;

disp('The Augmented Matrix is ');
disp(Aug);
n=3; //The value of n can be set to any value depending on the n x n matrix needed

disp('The states of the Matrix is');

for i=2:n
    for j=2:n+1
        a(i,j)=a(i,j)-a(1,j)*a(i,1)/a(1,1);
    end
    a(i,1)=0;
end

disp(a);
for i=3:n
    for j=3:n+1
        a(i,j)=a(i,j)-a(2,j)*a(i,2)/a(2,2);
    end
    a(i,2)=0;
end
disp(a)
x(n)=a(n,n+1)/a(n,n);
for i=n-1:-1:1
    sumk=0;
    for k=i+1:n
        sumk=sumk+a(i,k)*x(k);
    end
    x(i)=(a(i,n+1)-sumk)/a(i,i);
end

n=3;

disp('column space')
for i=1:3
    for j=i:4
        if(a(i,j)<>0)
            disp('is a pivot column',j,'column')
            for k=1:3
                disp(Aug(k,j))
            end
            break
        end
end

end

//For finding the row space
disp("row space")
for i=1:3
    for j=i:4
        if(a(i,j)<>0)
            disp('is a pivot row',j,'row')
            for k=1:4
                disp(Aug(j,k))
            end
            break
        end
end

end

