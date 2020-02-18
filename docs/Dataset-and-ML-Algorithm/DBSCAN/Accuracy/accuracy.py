"""fp= open("File.txt","r") 
print(fp.read())"""

list_of_lists = []
with open('test2.txt') as f:
    for line in f:
        inner_list = [elt.strip() for elt in line.split(',')]
        # in alternative, if you need to use the file content as numbers
        inner_list = [(elt.strip()) for elt in line.split(',')]
        list_of_lists.append(inner_list)
i=2
list_of_lists = []
with open('predict2.txt') as r:
    for line in r:
        inner_list1 = [elt.strip() for elt in line.split(',')]
        # in alternative, if you need to use the file content as numbers
        inner_list1 = [(elt.strip()) for elt in line.split(',')]
        list_of_lists.append(inner_list)

count=0

for i in range(len('test2.txt')):
    j=inner_list[i]
    k=inner_list1[i]
    if j == k:
        count=count+1;
    print(count)
print(((count)/len('test2.txt'))*100)
