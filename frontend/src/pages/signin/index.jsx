import Button from "../../components/Button";
import Card from "../../components/Card";
import Input from "../../components/Input";

function SignIn() {
  return (
    <div>
      <Card>
        <h2 className="text-2xl font-bold mb-4">Sign In</h2>
        <Input label="Email" type="email" name="email" />
        <Input label="Password" type="password" name="password" />
        <Button variant="primary" size="medium" className="mt-4" type="submit">
          Sign In
        </Button>
      </Card>
    </div>
  );
}

export default SignIn;
