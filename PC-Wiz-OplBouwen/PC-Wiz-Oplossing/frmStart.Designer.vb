<Global.Microsoft.VisualBasic.CompilerServices.DesignerGenerated()> _
Partial Class frmStart
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
        Me.btnInlezen = New System.Windows.Forms.Button()
        Me.btnStart = New System.Windows.Forms.Button()
        Me.SuspendLayout
        '
        'btnInlezen
        '
        Me.btnInlezen.Location = New System.Drawing.Point(12, 12)
        Me.btnInlezen.Name = "btnInlezen"
        Me.btnInlezen.Size = New System.Drawing.Size(174, 23)
        Me.btnInlezen.TabIndex = 0
        Me.btnInlezen.Text = "Lees Prijslijst Componenten"
        Me.btnInlezen.UseVisualStyleBackColor = true
        '
        'btnStart
        '
        Me.btnStart.Location = New System.Drawing.Point(12, 41)
        Me.btnStart.Name = "btnStart"
        Me.btnStart.Size = New System.Drawing.Size(174, 23)
        Me.btnStart.TabIndex = 1
        Me.btnStart.Text = "Start Configuratie ->"
        Me.btnStart.UseVisualStyleBackColor = true
        '
        'frmStart
        '
        Me.AutoScaleDimensions = New System.Drawing.SizeF(6!, 13!)
        Me.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font
        Me.ClientSize = New System.Drawing.Size(203, 78)
        Me.Controls.Add(Me.btnStart)
        Me.Controls.Add(Me.btnInlezen)
        Me.Name = "frmStart"
        Me.Text = "StartScherm"
        Me.ResumeLayout(false)

End Sub

    Friend WithEvents btnInlezen As Button
    Friend WithEvents btnStart As Button
End Class
