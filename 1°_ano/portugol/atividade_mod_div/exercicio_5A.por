programa
{
	inclua biblioteca Matematica --> mat
	
	funcao inicio()
	{
		real b = 11.5
		real c = 6.3
		real a, a_quadrado, b_quadrado, c_quadrado, diagonal

		 b_quadrado = mat.potencia(b, 2) 
		 c_quadrado = mat.potencia(c, 2)
		 a_quadrado = b_quadrado + c_quadrado
		 a = mat.raiz(a_quadrado, 2)
		 diagonal = mat.arredondar(a, 0)

		 escreva("Ao aplicar a fórmula de Bhaskara no retângulo, descobrimos que o fio a ser comprado deverá ter ", diagonal, " centímetros.")
	}
}
