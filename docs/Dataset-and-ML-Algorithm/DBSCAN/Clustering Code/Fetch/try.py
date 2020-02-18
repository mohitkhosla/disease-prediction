list_of_lists = []
with open('File.txt') as f:
    for line in f:
        inner_list = [elt.strip() for elt in line.split(',')]
        inner_list = [int(elt.strip()) for elt in line.split(',')]
        list_of_lists.append(inner_list)
a=inner_list[0]
b=inner_list[1]
c=inner_list[2]
d=inner_list[3]
e=inner_list[4]
f=inner_list[5]
g=inner_list[6]
h=inner_list[7]
i=inner_list[8]
j=inner_list[9]
k=inner_list[10]
l=inner_list[11]
m=inner_list[12]
n=inner_list[13]
o=inner_list[14]
p=inner_list[15]
q=inner_list[16]
r=inner_list[17]
s=inner_list[18]
t=inner_list[19]

X=a+b+c+d+e+f+t
Y=g+h+i+j+k+l+s
Z=m+n+o+p+q+r


A= abs(X-270)+abs(Y-112)+abs(Z-255)
B= abs(X-145)+abs(Y-225)+abs(Z-270)
C= abs(X-200)+abs(Y-178)+abs(Z-127)
D= abs(X-440)+abs(Y-165)+abs(Z-70)
E= abs(X-25)+abs(Y-25)+abs(Z-25)


Result=min(A,B,C,D,E)
file = open("testfile.txt", "w+")
if (Result==A):

    file.write("Disease Predicted is Pneumonia") 
   

if (Result==B):
    
    file.write("Disease Predicted is TB") 
    
   
if (Result==C):
    
    file.write("Disease Predicted is Asthma") 
        
    
if (Result==D):
    
    file.write("Disease Predicted is Malaria") 
    
if  (Result==E):
  
    file.write("No Disease Predicted ")

file.close()    
  

  
        
