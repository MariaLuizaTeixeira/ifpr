programa
{
	
	funcao inicio()
	{
		questao1 ()
	}
	
	funcao questao1 ()
	{
		inteiro A = 80000
		inteiro B = 200000
		inteiro ano = 1

		enquanto(inteiro A <= inteiro B)
		{
			
			A = A + A * 3/100
			B = B + B * 1.5/100
			
			escreva("No ", ano, "° ano a cidade A tem ", A, " habitantes e a cidade B tem ", B, " habitantes.\n")
			
			ano++
		}
		
	}
}
