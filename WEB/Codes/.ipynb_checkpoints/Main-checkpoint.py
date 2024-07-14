import turtle

def draw_3d_letter(letter):
    t = turtle.Turtle()
    t.speed(0)
    t.penup()
    t.goto(-100, 0)
    t.pendown()

    # Define the 3D shape of the letter
    if letter == 'A':
        t.goto(0, 100)
        t.goto(100, 0)
        t.goto(50, -50)
        t.goto(-50, -50)
        t.goto(-100, 0)
        t.goto(0, 100)
        t.goto(0, 50)
        t.goto(50, 50)
        t.goto(50, -50)
    elif letter == 'B':
        t.goto(0, 100)
        t.goto(0, -100)
        t.goto(50, -50)
        t.goto(50, 50)
        t.goto(0, 100)
        t.goto(-50, 50)
        t.goto(-50, -50)
        t.goto(0, -100)
    # Add more letters as needed

    turtle.done()

# Get the letter input from the user
letter = input("Enter a letter to draw in 3D: ").upper()

# Call the function to draw the 3D letter
draw_3d_letter(letter)
