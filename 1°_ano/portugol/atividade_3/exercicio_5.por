programa
{
	inclua biblioteca Matematica --> mat
	
	funcao inicio()
	{
		real maior, primeiro, segundo
		
		escreva("Qual o primeiro número?\n")
		leia(primeiro)
		escreva("Qual o segundo número?\n")
		leia(segundo)

		maior = mat.maior_numero(primeiro, segundo)

		escreva("O maior número é ", maior)
	}
}
