programa
{
	
	funcao inicio()
	{
		questao_8 ()
	}

	funcao questao_8 ()
	{
		inteiro numero, quantidade
		inteiro soma = 0
		inteiro maior = 0
		inteiro menor = 1

		escreva("Insira a quantidade de números a serem digitados:\n")
		leia(quantidade)

		para(inteiro i=0; i < quantidade; i++)
		{
			escreva("Insira um número:\n")
			leia(numero)

			se(numero > 0 e numero < 1000)
			{
				soma = soma + numero
				se(numero > maior)
				{
					maior = numero
				}

				se(numero < menor)
				{
					menor = numero
				}
			}
			senao
			{
				escreva("O programa só aceita números entre 0 e 1000\n")
			}
			
		}
		
		escreva("Dos ", quantidade, " números digitados ", maior, " é o maior, ", menor, " é o menor e ", soma, " é a soma.")
	}
}
