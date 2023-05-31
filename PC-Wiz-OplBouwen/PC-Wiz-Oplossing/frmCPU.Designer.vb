<Global.Microsoft.VisualBasic.CompilerServices.DesignerGenerated()> _
Partial Class frmCPU
    Inherits System.Windows.Forms.Form

    'Form overrides dispose to clean up the component list.
    <System.Diagnostics.DebuggerNonUserCode()> _
    Protected Overrides Sub Dispose(ByVal disposing As Boolean)
        Try
            If disposing AndAlso components IsNot Nothing Then
                components.Dispose()
            End If
        Finally
            MyBase.Dispose(disposing)
        End Try
    End Sub

    'Required by the Windows Form Designer
    Private components As System.ComponentModel.IContainer

    'NOTE: The following procedure is required by the Windows Form Designer
    'It can be modified using the Windows Form Designer.  
    'Do not modify it using the code editor.
    <System.Diagnostics.DebuggerStepThrough()> _
    Private Sub InitializeComponent()
        Me.lstOnderdelen = New System.Windows.Forms.ListBox()
        Me.btnKiezen = New System.Windows.Forms.Button()
        Me.lblOverzicht = New System.Windows.Forms.Label()
        Me.lblTotaalPrijs = New System.Windows.Forms.Label()
        Me.txtOverzicht = New System.Windows.Forms.TextBox()
        Me.btnNext = New System.Windows.Forms.Button()
        Me.SuspendLayout
        '
        'lstOnderdelen
        '
        Me.lstOnderdelen.Font = New System.Drawing.Font("Courier New", 8.25!, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, CType(0,Byte))
        Me.lstOnderdelen.FormattingEnabled = true
        Me.lstOnderdelen.ItemHeight = 14
        Me.lstOnderdelen.Location = New System.Drawing.Point(13, 25)
        Me.lstOnderdelen.Name = "lstOnderdelen"
        Me.lstOnderdelen.Size = New System.Drawing.Size(379, 172)
        Me.lstOnderdelen.TabIndex = 0
        '
        'btnKiezen
        '
        Me.btnKiezen.Location = New System.Drawing.Point(13, 208)
        Me.btnKiezen.Name = "btnKiezen"
        Me.btnKiezen.Size = New System.Drawing.Size(200, 23)
        Me.btnKiezen.TabIndex = 2
        Me.btnKiezen.Text = "Kiezen"
        Me.btnKiezen.UseVisualStyleBackColor = true
        '
        'lblOverzicht
        '
        Me.lblOverzicht.AutoSize = true
        Me.lblOverzicht.Location = New System.Drawing.Point(400, 32)
        Me.lblOverzicht.Name = "lblOverzicht"
        Me.lblOverzicht.Size = New System.Drawing.Size(152, 13)
        Me.lblOverzicht.TabIndex = 4
        Me.lblOverzicht.Text = "OVERZICHT CONFIGURATIE"
        '
        'lblTotaalPrijs
        '
        Me.lblTotaalPrijs.AutoSize = true
        Me.lblTotaalPrijs.Location = New System.Drawing.Point(219, 213)
        Me.lblTotaalPrijs.Name = "lblTotaalPrijs"
        Me.lblTotaalPrijs.Size = New System.Drawing.Size(76, 13)
        Me.lblTotaalPrijs.TabIndex = 5
        Me.lblTotaalPrijs.Text = "TOTAAL: €0,0"
        '
        'txtOverzicht
        '
        Me.txtOverzicht.Font = New System.Drawing.Font("Courier New", 8.25!, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, CType(0,Byte))
        Me.txtOverzicht.Location = New System.Drawing.Point(398, 49)
        Me.txtOverzicht.Multiline = true
        Me.txtOverzicht.Name = "txtOverzicht"
        Me.txtOverzicht.ScrollBars = System.Windows.Forms.ScrollBars.Vertical
        Me.txtOverzicht.Size = New System.Drawing.Size(339, 148)
        Me.txtOverzicht.TabIndex = 6
        '
        'btnNext
        '
        Me.btnNext.Location = New System.Drawing.Point(743, 102)
        Me.btnNext.Name = "btnNext"
        Me.btnNext.Size = New System.Drawing.Size(88, 23)
        Me.btnNext.TabIndex = 7
        Me.btnNext.Text = "GA VERDER"
        Me.btnNext.UseVisualStyleBackColor = true
        '
        'frmCPU
        '
        Me.AutoScaleDimensions = New System.Drawing.SizeF(6!, 13!)
        Me.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font
        Me.ClientSize = New System.Drawing.Size(858, 254)
        Me.Controls.Add(Me.btnNext)
        Me.Controls.Add(Me.txtOverzicht)
        Me.Controls.Add(Me.lblTotaalPrijs)
        Me.Controls.Add(Me.lblOverzicht)
        Me.Controls.Add(Me.btnKiezen)
        Me.Controls.Add(Me.lstOnderdelen)
        Me.Name = "frmCPU"
        Me.Text = "frmCPU"
        Me.ResumeLayout(false)
        Me.PerformLayout

End Sub

    Friend WithEvents lstOnderdelen As ListBox
    Friend WithEvents btnKiezen As Button
    Friend WithEvents lblOverzicht As Label
    Friend WithEvents lblTotaalPrijs As Label
    Friend WithEvents txtOverzicht As TextBox
    Friend WithEvents btnNext As Button
End Class
