10 Z$ = " "
20 FOR K = 0 TO 20
30 A = RND(0)
40 IF A <= 0.5 THEN Z$ = Z$ + "/"
60 IF A >= 0.5 THEN Z$ = Z$ + "\"
70 NEXT K
80 PRINT Z$
90 GOTO 10