Public Class frmStart
    Public Shared config_pc As New Pc
    Public Shared cpus As New List(Of component)
    Public Shared moederbords As New List(Of component)
    Public Shared ssds As New List(Of component)
    Public Shared geheugens As New List(Of component)
    Public Shared grafischs As New List(Of component)
    Public Shared cases As New List(Of component)
    Private Sub btnInlezen_Click(sender As Object, e As EventArgs) Handles btnInlezen.Click
        FileOpen(1, "PC componenten Lijst 2.txt", OpenMode.Input)

        Do While Not EOF(1)
            Dim type As String = ""
            Dim benaming As String = ""
            Dim prijs As Decimal


            Try
                Input(1, type)
                Input(1, benaming)
                Input(1, prijs)

                If type.ToLower = "cpu" Then
                    Dim comcpu As New component
                    comcpu.benaming = benaming
                    comcpu.prijs = prijs
                    cpus.Add(comcpu)



                    ' andere manier met rechtstreek via de public new
                    'cpus.Add(New component(benaming, prijs))
                ElseIf type.ToLower = "moederbord" Then
                    Dim comcpu As New component
                    comcpu.benaming = benaming
                    comcpu.prijs = prijs
                    moederbords.Add(comcpu)
                ElseIf type.ToLower = "geheugen" Then
                    Dim comcpu As New component
                    comcpu.benaming = benaming
                    comcpu.prijs = prijs
                    geheugens.Add(comcpu)
                ElseIf type.ToLower = "ssd" Then
                    Dim comcpu As New component
                    comcpu.benaming = benaming
                    comcpu.prijs = prijs
                    ssds.Add(comcpu)
                ElseIf type.ToLower = "grafisch" Then
                    Dim comcpu As New component
                    comcpu.benaming = benaming
                    comcpu.prijs = prijs
                    grafischs.Add(comcpu)
                ElseIf type.ToLower = "case" Then
                    Dim comcpu As New component
                    comcpu.benaming = benaming
                    comcpu.prijs = prijs
                    cases.Add(comcpu)
                End If



            Catch

            End Try
        Loop
        FileClose(1)


    End Sub

    Private Sub btnStart_Click(sender As Object, e As EventArgs) Handles btnStart.Click
        config_pc = New Pc
        frmCPU.Show()
        Me.Hide()

    End Sub
End Class
