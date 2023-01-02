            return "Player 1 won!"
        else:
            return "Player 2 won!"
    elif player1 == "paper":
        if player2 == "rock":
            return "Player 1 won!"
        else:
            return "Player 2 won!"
    else:  # player1 is rock
        if player2 == "scissors":
            return "Player 1 won!"
        else:
            return "Player 2 won!"

print(who_won("scissors", "paper"))   
print(who_won("scissors", "rock")) 
print(who_won("paper", "paper"))  
