import java.util.Scanner;

public class sort
{
	public static void main(String... args)
	{
		System.out.println("Sorting Array.................");
		int n,i,j;
		larg=l[0];
		smal=s=[0];
		Scanner s=new Scanner(System.in);
		n=s.nextInt();
		int arr[]=new int[n];
		for(i=0;i<n;i++)
		{
			for(j=i+1;j<n;j++)
			{
				if(arr[i]<arr[j])
				{
					temp=arr[i];
					arr[i]=arr[j];
					arr[j]=temp;
				}
			}
		}
		for(i=0;i<n;i++)
		{
		
		System.out.println("Sorting Array.."+arr[i]);	
		}
	}
}
				