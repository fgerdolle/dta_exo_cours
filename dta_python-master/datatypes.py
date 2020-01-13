"""
x_int = 20
x_float = 20.5

print(x_int)
print(x_int + 3)

print(x_float)
print(x_float + 3)
"""

"""
x_str = "Hello World"

print(x_str)
print(x_str + ' Python is good' +" "+ str(31))  #python ne mélange pas chaine de caractere et entier   il faut caster (forcer le type) 31 en chaine de caractere  avec str() ou ""
print(len(x_str))
print(x_str[0:5]) # cela veut dire prendre les caractere de 0 à 5    5 non inclue

tpl_str = "I am {} years old"
print(tpl_str.format(41))  # .format une methode sur les chaine de caractere qui va venir prendre son contenu pour le mettre dans lespace entre {}
"""

"""
x_bool = False  #important False et True avec majuscule pour les booleen
print(x_bool)
"""

"""
x_list = ["apple", "banana", "cherry"]
print(x_list)
print(x_list[1])
print(x_list[2:])

y_list = ["orange", "lemon"]
print(x_list + y_list)

if "apple" in x_list :
    print("we have apples !")
else :
    print("we dont have apples !")

for item in y_list:
    print(item)

y_list.append("strawberry")
y_list.append("raspberry")
y_list.remove("lemon")
print(y_list)
"""


"""
x_tuple = ("apple", "banana", "cherry") #un tuple est un tableau qui nest pas modifiable
print(x_tuple)
print(x_tuple[1])
"""


"""
x_dict = {"name" : "John", "age" : 36}
print(x_dict["age"])
x_dict["city"] = "Paris"
print(x_dict["city"])
"""