import javax.swing.JFrame;

public class GUIFrame extends JFrame
{
	public static void main(String [] args)
	{
		new GUIFrame();
	}
	public GUIFrame()
	{
		setSize(500,500);
		setResizable(false);
		setDefaultCloseOperation(EXIT_ON_CLOSE);
		setTitle("NJIT HackRU Chat");
		setVisible(true);
	}
}