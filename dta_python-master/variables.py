#commentaire sur une seul ligne
"""
x = 5
y = "John"
print(x)
print(y)
"""
#la triple cote serre a faire un block de commentaire
"""
x = 4 # x is of type int
print(x)
x = "Sally" # x is now of type str
print(x)
"""

"""
x, y, z = "Orange", "Banana", "Cherry"
print(x)
print(y)
print(z)
"""

"""
x = "awesome"
# def = definir  remplace function de JS   et l'indentation (tab ou double espace ) remplace les { } 
def myfunc():
    print("Python is " + x)

myfunc()
"""

"""
x = "awesome"

def myfunc():
    x = "fantastic"
    print("Python is " + x)

myfunc()

print("Python is " + x)
"""


def myfunc():
    global x
    x = "fantastic"
    print("Python is " + x)

myfunc()

print("Python is " + x)
