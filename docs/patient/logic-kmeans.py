list_of_lists = []
with open('test-data.txt') as f:
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


A= abs(a-0)+abs(b-0)+abs(c-0)+abs(d-0)+abs(e-0)+abs(f-0)+abs(g-0)+abs(h-0)+abs(i-0)+abs(j-0)+abs(k-1)+abs(l-0)+abs(m-0)+abs(n-1)+abs(o-0)+abs(p-0)+abs(q-0)+abs(r-0)+abs(s-0)+abs(t-0)
B= abs(a-1)+abs(b-0)+abs(c-0)+abs(d-0)+abs(e-0)+abs(f-0)+abs(g-0)+abs(h-0)+abs(i-0)+abs(j-0)+abs(k-0)+abs(l-0)+abs(m-0)+abs(n-0)+abs(o-0)+abs(p-0)+abs(q-0)+abs(r-0)+abs(s-0)+abs(t-0)
C= abs(a-0)+abs(b-0)+abs(c-0)+abs(d-0)+abs(e-0)+abs(f-0)+abs(g-0)+abs(h-0)+abs(i-0)+abs(j-0)+abs(k-0)+abs(l-0)+abs(m-0)+abs(n-0)+abs(o-0)+abs(p-0)+abs(q-1)+abs(r-0)+abs(s-1)+abs(t-0)
D= abs(a-0)+abs(b-0)+abs(c-0)+abs(d-0)+abs(e-1)+abs(f-0)+abs(g-0)+abs(h-0)+abs(i-0)+abs(j-0)+abs(k-0)+abs(l-0)+abs(m-0)+abs(n-0)+abs(o-0)+abs(p-0)+abs(q-0)+abs(r-0)+abs(s-0)+abs(t-0)
E= abs(a-0)+abs(b-0)+abs(c-0)+abs(d-0)+abs(e-0)+abs(f-0)+abs(g-0)+abs(h-0)+abs(i-0)+abs(j-0)+abs(k-0)+abs(l-0)+abs(m-0)+abs(n-0)+abs(o-0)+abs(p-0)+abs(q-0)+abs(r-0)+abs(s-0)+abs(t-0)

print(A,B,C,D,E)
Result=min(A,B,C,D,E)
file = open("predicted-disease.txt", "w+")

if (Result==A):
    
    file.write("Disease Predicted: Pneumonia \n")

if (Result==B):
    
    file.write("Disease Predicted: Tuberculosis \n")
   
if (Result==C):

    file.write("Disease Predicted: Asthma \n") 
    
if (Result==D):

    file.write("Disease Predicted: Malaria \n")    

if (Result==E):
    
    file.write("Disease Predicted: None! You are fit and healthy.")

file.close()    
  

  
        
