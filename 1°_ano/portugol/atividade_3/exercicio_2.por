programa
{
	inclua biblioteca Matematica --> mat
	
	funcao inicio()
	{
		real a, b, c, delta, x1, x2

		escreva("Qual o valor de a?\n")
		leia(a)
		escreva("Qual o valor de b?\n")
		leia(b)
		escreva("Qual o valor de c?\n")
		leia(c)

		delta = mat.potencia(b, 2) - 4 * a * c
		x1 = (-b + mat.raiz(delta, 2)) / (2 * a)
		x2 = (-b - mat.raiz(delta, 2)) / (2 * a)

		escreva("O valor de a foi ", a, ", o valor de b foi ", b, ", o valor de c foi ", c, ", logo, o valor de delta foi ", delta, ", o valor de x1 foi ", x1, " e o valor de x2 foi ", x2)
	}
}
