Public Class frmCPU
    Private Sub frmCPU_Activated(sender As Object, e As EventArgs) Handles Me.Activated
        updatealles()
    End Sub


    Sub updatealles()
        ' lisbox updaten
        lstOnderdelen.Items.Clear()
        For Each componentje In frmStart.cpus

            Dim liststring = componentje.ToString

            lstOnderdelen.Items.Add(liststring)
        Next
        'tekstvak updaten

        txtOverzicht.Text = ""
        If Not frmStart.config_pc.cpu.benaming = "" Then
            txtOverzicht.Text &= "cpu: " & frmStart.config_pc.cpu.benaming & " - €" & frmStart.config_pc.cpu.prijs & vbCrLf
        End If
        If Not frmStart.config_pc.Moederbord.benaming = "" Then
            txtOverzicht.Text &= "Moederbord: " & frmStart.config_pc.cpu.benaming & " - €" & frmStart.config_pc.cpu.prijs & vbCrLf
        End If
        If Not frmStart.config_pc.ssd.benaming = "" Then
            txtOverzicht.Text &= "ssd: " & frmStart.config_pc.cpu.benaming & " - €" & frmStart.config_pc.cpu.prijs & vbCrLf

        End If
        If Not frmStart.config_pc.grafisch.benaming = "" Then
            txtOverzicht.Text &= "grafisch: " & frmStart.config_pc.cpu.benaming & " - €" & frmStart.config_pc.cpu.prijs & vbCrLf
        End If
        If Not frmStart.config_pc.geheugen.benaming = "" Then
            txtOverzicht.Text &= "geheugen: " & frmStart.config_pc.cpu.benaming & " - €" & frmStart.config_pc.cpu.prijs & vbCrLf
        End If
        If Not frmStart.config_pc.Casing.benaming = "" Then
            txtOverzicht.Text &= "case: " & frmStart.config_pc.cpu.benaming & " - €" & frmStart.config_pc.cpu.prijs & vbCrLf
        End If
    End Sub

    Private Sub btnKiezen_Click(sender As Object, e As EventArgs) Handles btnKiezen.Click

        If lstOnderdelen.SelectedIndex <> -1 Then
            frmStart.config_pc.cpu = frmStart.cpus(lstOnderdelen.SelectedIndex)
        End If


        updatealles()
    End Sub

    Private Sub btnNext_Click(sender As Object, e As EventArgs) Handles btnNext.Click

    End Sub

    Private Sub frmCPU_Load(sender As Object, e As EventArgs) Handles Me.Load
        updatealles()
    End Sub
End Class