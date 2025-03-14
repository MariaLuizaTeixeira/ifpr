programa
{
	inclua biblioteca Matematica
 --> mat
	
	funcao inicio()
	{
		real quarto, primeiro, segundo, terceiro, maior1, maior2, maior_mesmo

		escreva("Qual o primeiro número?\n")
		leia(primeiro)
		escreva("Qual o segundo número?\n")
		leia(segundo)
		escreva("Qual o terceiro número?\n")
		leia(terceiro)
		escreva("Qual o quarto número?\n")
		leia(quarto)

		maior1 = mat.maior_numero(primeiro, segundo)
		maior2 = mat.maior_numero(terceiro, quarto)
		maior_mesmo = mat.maior_numero(maior1, maior2)

		escreva("O maior número é ", maior_mesmo)
	}
}
